<!DOCTYPE html>
<html lang="en">
<head>
    <title>Brokers</title>
    <link rel="stylesheet" href="styles.css">
    <script src="../js/includeHTML.js"></script>
</head>

<body onload="includeHTML()">
<div include-html="../components/header.html"></div>

<div class="cont">
    <div class="sidenav" include-html="sidenav.html"></div>
    <div class="conte">
        <h1>List of Brokers</h1>
        <?php
        $brokersData = file_get_contents('../../src/data/brokers.txt');
        $brokers = explode("\n", $brokersData);

echo '<table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>';

        foreach ($brokers as $broker) {
        $brokerDetails = explode(',', $broker);
        echo '<tr>';
        foreach ($brokerDetails as $detail) {
        echo '<td>' . $detail . '</td>';
        }
        echo '</tr>';
        }

        echo '</table>';
        ?>

    </div>
</div>

</body>
</html>