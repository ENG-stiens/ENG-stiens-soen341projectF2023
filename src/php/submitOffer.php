<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $propertyAddress = $_POST["address"];
    $offerAmount = $_POST["offer"];

    // Create an associative array with offer data
    $offerData = [
        'Name' => $name,
        'Email' => $email,
        'Phone' => $phone,
        'PropertyAddress' => $propertyAddress,
        'OfferAmount' => $offerAmount,
        'Status' => 'Pending', // Default status
    ];

    // Convert the associative array to a JSON string
    $offerJson = json_encode($offerData);

    // Append the JSON string to the text file
    file_put_contents('offers.txt', $offerJson . PHP_EOL, FILE_APPEND);

    // Send a response to the client
    echo "Offer submitted successfully!";
} else {
    // Handle invalid requests
    http_response_code(400);
    echo "Invalid request!";
}
?>