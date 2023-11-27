<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $selectedHouse = $_POST["house"];
    $preferredDate = $_POST["date"];
    $preferredTime = $_POST["time"];
    $message = $_POST["message"];

    // Create a string with appointment data
    $appointmentData = "Name: $name\nEmail: $email\nPhone: $phone\nHouse: $selectedHouse\nDate: $preferredDate\nTime: $preferredTime\nMessage: $message\n\n";

    // Append the data to the text file
    file_put_contents('appointments.txt', $appointmentData, FILE_APPEND);

    // Send a response to the client
    echo "Appointment booked successfully!";
} else {
    // Handle invalid requests
    http_response_code(400);
    echo "Invalid request!";
}
?>
