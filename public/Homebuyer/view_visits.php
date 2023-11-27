<?php
// Read the contents of the appointments text file
$appointments = file_get_contents('appointments.txt');

// Output the contents
echo nl2br($appointments);
?>
