<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "eng-stiens@gmail.com"; // UPDATE EMAIL ??
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Message sent successfully! We'll get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
