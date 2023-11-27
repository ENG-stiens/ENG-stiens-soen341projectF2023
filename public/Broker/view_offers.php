<?php
// Read the contents of the offers text file
$offers = file_get_contents('offers.txt');

// Output the contents
echo nl2br($offers);
?>
