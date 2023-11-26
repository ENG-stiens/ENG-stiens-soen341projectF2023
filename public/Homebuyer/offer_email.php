<?php
session_save_path('../../sessions');
session_start();
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

// Function to validate user input
function validateInput($data) {
    return htmlspecialchars(trim($data));
}

// Function to generate a unique offer ID
function generateOfferID() {
    return uniqid();
}

// Function to save offer data to a text file
// Function to save offer data to a text file
function saveOffer($data) {
    $offerFile = '../../src/data/offer.txt';

    // Create or open the file for appending
    $file = fopen($offerFile, 'a');

    // Generate a unique ID for the offer
    $data['id'] = generateOfferID();

    // Set status to "In Progress" by default
    $data['status'] = 'In Progress';

    // Prepare data string
    $dataString = implode(',', $data) . PHP_EOL;

    // Write data to the file
    fwrite($file, $dataString);

    // Close the file
    fclose($file);

    return $data['id'];
}


// Validate and process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form data
    $name = validateInput($_POST['name']);
    $email = validateInput($_POST['email']);
    $phone = validateInput($_POST['phone']);
    $propertyAddress = validateInput($_POST['address']);
    $offerAmount = validateInput($_POST['offer']);

    // Ensure all required fields are filled
    if ($name && $email && $phone && $propertyAddress && $offerAmount) {
        // Prepare offer data
        $offerData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'propertyAddress' => $propertyAddress,
            'offerAmount' => $offerAmount,
        ];

        // Save offer and get the unique ID
        $offerID = saveOffer($offerData);

        // You can redirect to a confirmation page or display a success message
        // For now, let's just echo the offer ID
        echo "Offer submitted successfully. Your Offer ID is: $offerID";
    } else {
        // Handle validation failure, e.g., redirect back to the form with an error message
        echo "Error: Please fill in all required fields.";
    }
} else {
    // Redirect back to the offer form if accessed directly
    header('Location: offer.php');
    exit();
}



?>
