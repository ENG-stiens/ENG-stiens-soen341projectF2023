<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "delete") {
    // Check if the necessary fields are set
    if (isset($_POST["name"]) && isset($_POST["last_name"])) {
        $name = $_POST["name"];
        $last_name = $_POST["last_name"];

        // Read the existing brokers from the file
        $brokersData = file_get_contents('../data/brokers.txt');
        $brokers = explode("\n", $brokersData);

        // Loop through brokers to find and delete the matching one
        foreach ($brokers as $key => $broker) {
            $brokerDetails = explode(',', $broker);
            if ($brokerDetails[1] == $name && $brokerDetails[2] == $last_name) {
                unset($brokers[$key]); // Remove the broker from the array
                break; // Stop searching once found
            }
        }

        // Save the updated brokers back to the file
        file_put_contents('../data/brokers.txt', implode("\n", $brokers));
    }
}

// Redirect back to the ManageBrokers.php page
header("Location: ../../public/Administrator/ManageBrokers.php");
exit();

