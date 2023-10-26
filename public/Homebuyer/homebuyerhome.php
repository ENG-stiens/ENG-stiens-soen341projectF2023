
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .background {
        background-image: url('5784Montana.jpeg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        color: #ffffff;
        padding: 20px;
        text-align: center;
    }

    .overlay h1 {
        margin: 0;
        padding: 20px 0;
        font-size: 3em;
        text-align: center;
    }

    .start-journey-button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1.5em;
        margin: 20px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .start-journey-button:hover {
        background-color: #45a049;
    }
</style>

<style>

<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="background">
    <div class="overlay">
        <h1>Welcome Homebuyer</h1>
        <a href="home.php" class="start-journey-button">Start your journey</a>    </div>
</div>

<?php
include 'footer.php';
?>
</body>
</html>