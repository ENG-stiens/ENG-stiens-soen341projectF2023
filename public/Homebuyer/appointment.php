<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&family=Russo+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Appointment</title>
</head>
<?php
include 'header.php';
include 'sidenav.php';
?>
<body>
    <div class="content">
        <h1>Book an Appointment</h1> <form action="/submit_appointment" method="post">
            <label for="name">Your Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
    
            <label for="phone">Phone:</label><br>
            <input type="tel" id="phone" name="phone" required><br><br>
            
            <label for="house">House to Visit:</label><br>
        <select id="house" name="house">
            <option value="house1">House 1</option>
            <option value="house2">House 2</option>
            <option value="house3">House 3</option>
        </select><br><br>
    
            <label for="date">Preferred Date:</label><br>
            <input type="date" id="date" name="date" required><br><br>
    
            <label for="time">Preferred Time:</label><br>
            <input type="time" id="time" name="time" required><br><br>
    
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
    
            <input type="submit" value="Book Appointment">
        </form>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>