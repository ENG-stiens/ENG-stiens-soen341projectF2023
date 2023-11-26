<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">

    <meta charset="UTF-8">
    <title>Manage Brokers</title>
</head>
<body>

<?php
include 'header.html';
include 'sidenav.html';
?>

<!-----------------------------------------------------HTML for Manage Brokers Page ----------------------------------->

<div class="manage-brokers-title">
    <h1> Manage Brokers </h1>
</div>

<div class = "content">
 <div class="broker_CRUD_form">
    <form id="broker-form" action="/updateBroker" method="post">  <!-- check if good -->

        <label for="idbroker_info">ID:</label>
        <br>
        <input type="text" id="idbroker_info" name="idbroker_info">
        <br>

        <div class="name-lastname">
            <div class="name-input">
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" name="name" required>
                <br>
            </div>

            <div class="lastname-input">
                <label for="last_name">Last Name:</label>
                <br>
                <input type="text" id="last_name" name="last_name" required>
                <br>
            </div>
        </div>


        <div class="email-phone">
            <div class="email-input">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
            </div>

            <div class="phone-input">
                <label for="phone">Phone Number:</label><br>
                <input type="text" id="phone" name="phone" required><br>
            </div>
        </div>


        <br>
        <br>

        <div class="button-container">
            <button type="submit" class="update-button" name="action" value="update" >UPDATE</button>
        </div>

    </form>
</div>



<div class="broker_CRUD_form">
    <form id="broker-form" action="/createBroker" method="post">  <!-- check if good -->


        <div class="name-lastname">
            <div class="name-input">
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" name="name" required>
                <br>
            </div>

            <div class="lastname-input">
                <label for="last_name">Last Name:</label>
                <br>
                <input type="text" id="last_name" name="last_name" required>
                <br>
            </div>
        </div>


        <div class="email-phone">
            <div class="email-input">
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email" required><br>
            </div>

            <div class="phone-input">
                <label for="phone">Phone Number:</label><br>
                <input type="text" id="phone" name="phone" required><br>
            </div>
        </div>


        <br>
        <br>

        <!-- will need to modify the content here to create if else statements? -->
        <div class="button-container">

            <button type="submit" class="center-button add-broker" name="action" value="add">Add Broker</button>

        </div>

    </form>
</div>





<div class="broker_CRUD_form">
    <form id="broker-form" action="/deleteBrokerByName" method="post">  <!-- check if good -->

        <label for="id-broker">ID:</label>
        <br>
        <input type="text" id="id-broker" name="id-broker">
        <br>


        <div class="name-lastname">
            <div class="name-input">
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
            </div>

            <div class="lastname-input">
                <label for="last_name">Last Name:</label>
                <br>
                <input type="text" id="last_name" name="last_name">
                <br>
            </div>
        </div>


        <div class="email-phone">
            <div class="email-input">
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email" ><br>
            </div>

            <div class="phone-input">
                <label for="phone">Phone Number:</label><br>
                <input type="text" id="phone" name="phone"><br>
            </div>
        </div>


        <br>
        <br>

        <!-- will need to modify the content here to create if else statements? -->
        <div class="button-container">
            <button type="submit" class="update-button" name="action" value="delete">DELETE</button>
        </div>

    </form>
</div>
</div>
<?php include 'footer.html';
?>
</body>
</html>































<!----------------------------------------------------------Universal Template ----------------------------------------->

<!--------------------------------------------------------------------------------------------------------------------->

<!-- link to the javascript code-->
<script src="CRUD_brokers_suggestion_autofill.js"></script>

</body>
</html>