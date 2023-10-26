<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <style>
        /* Styles for the modal */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgba(0,0,0,0.4); 
        }
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }
    </style>
</head>
<?php
include 'header.php';
include 'sidenav.php';
?>
<body>
<div class="content">
    <h2>Welcome to the Homepage</h2>
    <button onclick="displayModal()">Login</button>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span onclick="closeModal()" style="float:right; cursor:pointer;">&times;</span>
        <h2>Login</h2>
        <form method="post" action="login.php">
            <label>Username:</label>
            <input type="text" name="username"><br><br>
            <label>Password:</label>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</div>

<script>
    // JavaScript functions to handle the modal
    function displayModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>

<?php include 'footer.php'; ?>
</body>
</html>
