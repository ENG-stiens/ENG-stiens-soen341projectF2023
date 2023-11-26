<?php
session_save_path('../../sessions');
session_start();

function validateUser($email, $password): bool|string|null
{
    $usersFile = '../data/users.txt';
    $lines = file($usersFile, FILE_IGNORE_NEW_LINES);

    foreach ($lines as $line) {
        list($id, $name, $lastName, $storedEmail, $phoneNumber, $type, $storedPassword) = explode(':', $line) + [null, null, null, null, null, null, null];

        if ($email === $storedEmail && $password === $storedPassword) {
            $_SESSION['user'] = [
                'id' => $id,
                'name' => $name,
                'lastName' => $lastName,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'type' => $type
            ];

            return $type;
        }
    }

    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userType = validateUser($email, $password);

    if ($userType !== false) {
        if ($userType === 'broker') {
            header('Location: ../../public/Broker/homepageBroker.html');
        }
        if ($userType === 'administrator') {
            header('Location: ../../public/Administrator/ManageBrokers.php');
        }
        else {
            header('Location: ../../public/Homebuyer/listings.html');
        }
        exit();
    } else {
        echo 'Invalid email or password';
    }
}
