<!DOCTYPE html>
<html>
<head>
    <title>Submit Your Offer</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/includeHTML.js"></script>
</head>

<script>
    document.getElementById('offer').addEventListener('submit', (event) => {
        event.preventDefault();
        const form = event.target;
        const formData = new FormData(form);

        fetch('/offer_email.php', {
            method: 'POST',
            body: formData,
        })
            .then((response) => response.text())
            .then((message) => {
                document.getElementById('message').textContent = message;
            })
            .catch((error) => {
                console.error(error);
            });
    });
</script>


<body onload="includeHTML()">  
<div include-html="../header.html"></div>

<div class="cont">
    <div class="sidenav" include-html="sidenav.html"></div>

    <div class="content-area">
        <h1>Submit Your Offer</h1>
        <p>Please fill out the form below to submit your offer for the desired property.</p>

        <form action="offer_email.php" method="post">
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


        <?php
        session_save_path('../../sessions');
        session_start();

        // Check if the user is logged in
        if (isset($_SESSION['user'])) {
            // Retrieve the user's information from the session
            $user = $_SESSION['user'];

            // Display user information
            echo "<h2>Your Offer Details:</h2>";

            // Retrieve and display offer information based on the user
            $offers = file('../../src/data/offer.txt', FILE_IGNORE_NEW_LINES);
            foreach ($offers as $offer) {
                $offerData = explode(',', $offer);
                $offerUserEmail = $offerData[1]; // Assuming email is stored at index 1

                // Check if the offer belongs to the logged-in user
                if ($offerUserEmail === $user['email']) {
                    echo "<p>Home: {$offerData[3]} </p>";
                    echo "<p>Offer: {$offerData[4]} </p>";
                    echo "<p>Status: {$offerData[6]} </p>";
                    echo "<br>";
                    echo "<br>";
                    // Add more details as needed
                }
            }
        } else {
            // If the user is not logged in, show a login link or redirect to the login page
            echo "<p>Please log in to view your offer details.</p>";
        }
        ?>

</div>


</body>
</html>
