<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "update") {
    // Validate and sanitize input data if necessary
    $id = $_POST["idbroker_info"];
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Read the existing brokers from the file
    $existingBrokers = file('../data/brokers.txt', FILE_IGNORE_NEW_LINES);

    // Update the information for the broker with the specified ID
    foreach ($existingBrokers as &$broker) {
        $brokerData = explode(',', $broker);
        if ($brokerData[0] == $id) {
            $brokerData[1] = $name;
            $brokerData[2] = $last_name;
            $brokerData[3] = $email;
            $brokerData[4] = $phone;
            $broker = implode(',', $brokerData);
            break;
        }
    }

    // Write the updated broker information back to the file
    file_put_contents('../data/brokers.txt', implode(PHP_EOL, $existingBrokers));

    // Redirect back to the ManageBrokers.php page after processing
    header("Location: ../../public/Administrator/ManageBrokers.php");
    exit();
}

