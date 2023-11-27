<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "add") {
    // Validate and sanitize input data if necessary
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Read the existing brokers from the file
    $existingBrokers = file('../data/brokers.txt', FILE_IGNORE_NEW_LINES);

    // Get the last line to extract the last ID, or use 0 if there are no existing brokers
    $lastLine = end($existingBrokers);
    $lastBroker = $lastLine ? explode(',', $lastLine) : [];
    $lastID = isset($lastBroker[0]) ? $lastBroker[0] : 0;

    // Generate the next ID
    $nextID = $lastID + 1;

    // Create a string for the new broker with the appropriate ID and newline character
    $newBroker = implode(',', [$nextID, $name, $last_name, $email, $phone]) . PHP_EOL;

    // Open the brokers.txt file in append mode and write the new broker information
    file_put_contents('../data/brokers.txt', $newBroker, FILE_APPEND | LOCK_EX);

    // Redirect back to the ManageBrokers.php page after processing
    header("Location: ../../public/Administrator/ManageBrokers.php");
    exit();
}
?>
