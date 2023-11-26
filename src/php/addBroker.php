<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "add") {
    // Validate and sanitize input data if necessary
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Create a string for the new broker
    $newBroker = implode(',', [$name, $last_name, $email, $phone]);

    if (filesize('brokers.txt') > 0) {
        $newBroker = "\n" . $newBroker;
    }

    // Open the brokers.txt file in append mode and write the new broker information
    file_put_contents('../data/brokers.txt', $newBroker . "\n", FILE_APPEND | LOCK_EX);

    // Redirect back to the ManageBrokers.php page after processing
    header("Location: ../../public/Administrator/ManageBrokers.php");
    exit();
}

