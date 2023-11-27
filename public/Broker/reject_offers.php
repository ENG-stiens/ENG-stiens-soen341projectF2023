<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the rejected offer, update status, etc.
    // You can implement the logic to update the status of the offer in your data storage (text file or database).
    // For simplicity, let's assume you have an offer ID sent from the form.
    $offerId = $_POST["offer_id"];

    // TODO: Implement logic to update the status of the offer with $offerId as "Rejected"

    echo "Offer rejected successfully!";
} else {
    http_response_code(400);
    echo "Invalid request!";
}
?>
