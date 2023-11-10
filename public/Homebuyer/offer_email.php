<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $offer = $_POST["offer"];

    $to = "engstiens@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $message_body = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nOffer: $offer";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Message sent successfully! We'll get back to you shortly to confirm your appointment.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
