<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<div class="content">
    <h2>Login</h2>
    <form method="post" action="login.php">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $users_file = fopen("users.txt", "r");

        while (($line = fgets($users_file)) !== false) {
            list($file_username, $file_password) = explode(":", $line);

            if ($username == trim($file_username)) {
                if (trim($password) === trim($file_password)) {
                    $_SESSION["logged_in"] = true;
                    $_SESSION["username"] = $username;
                    header("Location: home.php");
                    exit;
                } else {
                    echo "Invalid password!";
                    exit;
                }
            }
        }

        echo "Invalid username!";
        exit;
    }
    ?>

</div>
<?php include 'HeaderFooter.php'; ?>
</body>
</html>
