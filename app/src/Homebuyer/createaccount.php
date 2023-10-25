<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Account</title>
</head>
<body>
<nav>
    <a class="nav-link" href="home.php" target="_self">Home</a>
    <a class="nav-link" href="Findadogcat.php" target="_self">Find a dog/cat</a>
    <a class="nav-link" href="DogCare.php" target="_self">Dog Care</a>
    <a class="nav-link" href="CatCare.php" target="_self">Cat Care</a>
    <a class="nav-link" href="HaveAPetToGiveAway.php" target="_self">Have a Pet to Give Away</a>
    <a class="nav-link" href="ContactUs.php" target="_self">Contact Us</a>
</nav>
<div class= "content">
   <?php session_start();?>
   <?php
   function validateUsernameAndPassword($username, $password) {
       if (!ctype_alnum($username)) {
           return "Username can only contain letters and digits.";
       }
       if (!ctype_alnum($password)) {
           return "Password can only contain letters and digits.";
       }
       if (strlen($password) < 4) {
           return "Password must be at least 4 characters long.";
       }
       if (!preg_match('/[a-zA-Z]/', $password) || !preg_match('/[0-9]/', $password)) {
           return "Password must have at least one letter and one digit.";
       }
       return "";
   }

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $username = $_POST['username'];
       $password = $_POST['password'];

       $validationMsg = validateUsernameAndPassword($username, $password);

       if (!empty($validationMsg)) {
           echo "<p>$validationMsg</p>";
       } else {
           $loginFile = "logins.txt";
           if (file_exists($loginFile)) {
               $loginData = file_get_contents($loginFile);
               $loginArray = explode("\n", $loginData);
               foreach ($loginArray as $loginLine) {
                   $loginParts = explode(" ", $loginLine);
                   if ($loginParts[0] == $username) {
                       echo "<p>Username already exists. Please choose a different username.</p>";
                       exit();
                   }
               }
           }
           $newLogin = "$username $password\n";
           file_put_contents($loginFile, $newLogin, FILE_APPEND | LOCK_EX);
           echo "<p>Account successfully created. You can now login whenever you're ready.</p>";
       }
   }
   ?>

    <h2>Create Account</h2>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password"><br><br>

        <input type="submit" value="Create Account">
    </form>
</div>
<?php include 'HeaderFooter.php'; ?>
</body>
</html>
