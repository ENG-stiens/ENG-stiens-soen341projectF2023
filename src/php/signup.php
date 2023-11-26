<?php
// Function to add a new user to the user data file
function addUser($name, $lastName, $email, $phoneNumber, $type, $password) {
    $usersFile = '../data/users.txt';

    // Fetch existing users to determine the next ID
    $lines = file($usersFile, FILE_IGNORE_NEW_LINES);
    $lastUser = end($lines);

    // Extract the last ID and increment it
    $lastId = $lastUser ? explode(':', $lastUser)[0] : 0;
    $newId = intval($lastId) + 1;

    // Create the new user entry
    $newUser = "$newId:$name:$lastName:$email:$phoneNumber:$type:$password" . PHP_EOL;

    // Append the new user to the file
    file_put_contents($usersFile, $newUser, FILE_APPEND);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $type = $_POST['type'];
    $password = $_POST['password']; // Added this line

    // Check if the email is unique before adding a new user
    $usersFile = '../data/users.txt';
    $lines = file($usersFile, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        list($_, $storedEmail, $_, $_, $_, $_, $_) = explode(':', $line);
        if ($email === $storedEmail) {
            echo 'Email already exists. Please choose a different one.';
            exit();
        }
    }

    // Add the new user and redirect to login page
    addUser($name, $lastName, $email, $phoneNumber, $type, $password);
    header('Location: ../../public/index.html');
    exit();
}
?>
