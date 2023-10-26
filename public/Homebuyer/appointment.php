<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
?>
<head>
    <meta charset="UTF-8">
    <title>Appointment</title>
</head>

<?php 
include 'sidenav.php';
?>
<body>
    <div class="content">
        <h1>Book an Appointment</h1> 
        <form action="" method="post">
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
    
            <input type="submit" value="Book Appointment">
        </form>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>