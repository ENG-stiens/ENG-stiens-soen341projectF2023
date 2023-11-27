<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $house = $_POST["house"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $message = $_POST["message"];

    $to = "engstiens@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $message_body = "Name: $name\nEmail: $email\nPhone: $phone\nHouse: $house\nDate: $date\nTime: $time\nMessage:\n$message";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Message sent successfully! We'll get back to you shortly to confirm your appointment.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>