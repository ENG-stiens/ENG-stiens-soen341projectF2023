<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment</title>
    <script src="../js/includeHTML.js"></script>
</head>

<body onload="includeHTML()">  
<div include-html="../header.html"></div>

<div class="cont">
    <div class="sidenav" include-html="sidenav.html"></div>

    <div class="content-area">
        <h1>Book an Appointment</h1>
        <form action="send_email.php" method="post">
            <label for="name">Your Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone:</label><br>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="house">House to Visit:</label><br>
            <select id="house" name="house">
                <option value="10 Greendale">10 Greendale</option>
                <option value="67 Grand">67 Grand</option>
                <option value="770 Parkway">770 Parkway</option>
                <option value="999 Casablanca">999 Casablanca</option>
                <option value="5784 Montana">5784 Montana</option>
            </select><br><br>

            <label for="date">Preferred Date:</label><br>
            <input type="date" id="date" name="date" required><br><br>

            <label for="time">Preferred Time:</label><br>
            <input type="time" id="time" name="time" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>

            <input type="submit" value="Book Appointment" action="send_email.php" method="post">
        </form>

        <?php
        session_save_path('../../sessions');
        session_start();

        // Check if the user is logged in
        if (isset($_SESSION['user'])) {
            // Retrieve the user's information from the session
            $user = $_SESSION['user'];

            // Display user information
        echo "<h2>Your Appointment Details:</h2>";

        // Retrieve and display appointment information based on the user
        $appointments = file('../../src/data/appointment.txt', FILE_IGNORE_NEW_LINES);
        foreach ($appointments as $appointment) {
        $appointmentData = explode(',', $appointment);
        $appointmentUserEmail = $appointmentData[1]; // Assuming email is stored at index 2

        // Check if the appointment belongs to the logged-in user
        if ($appointmentUserEmail === $user['email']) {
        echo "<p>Home: {$appointmentData[3]} </p>";
        echo "<p>Date: {$appointmentData[4]} </p>";
        echo "<p>Time: {$appointmentData[5]} </p>";
        echo "<p>Status: {$appointmentData[7]} </p>";
        echo "<br>";
        echo "<br>";
        // Add more details as needed
        // Stop after finding the first appointment for the user
        }
        }
        } else {
        // If the user is not logged in, show a login link or redirect to the login page
        echo "<p>Please log in to view your appointment details.</p>";
        }
        ?>

    </div>


</div>

<div include-html="../footer.html"></div>
</body>
</html>