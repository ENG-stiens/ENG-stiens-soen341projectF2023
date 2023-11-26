<?php
session_save_path('../../sessions');
session_start();



// Function to validate user credentials and return user data
function validateUser($email, $password): bool|string|null
{
    $usersFile = '../data/users.txt';
    $lines = file($usersFile, FILE_IGNORE_NEW_LINES);

    foreach ($lines as $line) {
        list($id, $name, $lastName, $storedEmail, $phoneNumber, $type, $storedPassword) = explode(':', $line) + [null, null, null, null, null, null, null];

        if ($email === $storedEmail && $password === $storedPassword) {
            // Successful login, store user data in session
            $_SESSION['user'] = [
                'id' => $id,
                'name' => $name,
                'lastName' => $lastName,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'type' => $type
            ];

            return $type; // Return user type
        }
    }

    // Invalid credentials
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userType = validateUser($email, $password);

    if ($userType !== false) {
        // Successful login, redirect to the appropriate page
        if ($userType === 'broker') {
            header('Location: ../../public/Broker/homepageBroker.html');
        } else {
            header('Location: ../../public/Homebuyer/listings.html');
        }
        exit();
    } else {
        echo 'Invalid email or password';
    }
}
?>
