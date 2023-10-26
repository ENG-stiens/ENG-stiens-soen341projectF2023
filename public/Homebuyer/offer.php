<!DOCTYPE html>
<html>

<head>
    <title>Submit Your Offer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
include 'header.php';
include 'sidenav.php';
?>
<body>

    <div class="container">
        <h1>Submit Your Offer</h1>
        <p>Please fill out the form below to submit your offer for the desired property.</p>

        <form action="/submit_offer" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone Number:</label><br>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="address">Property Address:</label><br>
            <input type="text" id="address" name="address" required><br><br>

            <label for="offer">Your Offer ($):</label><br>
            <input type="number" id="offer" name="offer" required><br><br>

            <input type="submit" value="Submit Offer">
        </form>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>