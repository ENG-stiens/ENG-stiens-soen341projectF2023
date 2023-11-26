<?php
session_save_path('../../sessions');
session_start();



// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: ../../public/login.html');
    exit();
}

// Retrieve user data from the session
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/includeHTML.js"></script>
</head>

<body onload="includeHTML()">
<div include-html="../header.html"></div>

<div class="cont">
    <div class="sidenav" include-html="sidenav.html"></div>

    <div class="content-area">
        <h1>User Profile</h1>

        <ul>
            <li><strong>ID:</strong> <?php echo $user['id']; ?></li>
            <li><strong>Name:</strong> <?php echo $user['name']; ?></li>
            <li><strong>Last Name:</strong> <?php echo $user['lastName']; ?></li>
            <li><strong>Email:</strong> <?php echo $user['email']; ?></li>
            <li><strong>Phone Number:</strong> <?php echo $user['phoneNumber']; ?></li>
            <li><strong>User Type:</strong> <?php echo $user['type']; ?></li>
        </ul>

        <!-- Add any additional content or styling as needed -->
    </div>
</div>

</body>
</html>
