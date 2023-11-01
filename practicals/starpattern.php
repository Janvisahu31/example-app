<?php
// This is a PHP program that prints an inverted left triangle pattern of stars.

// Define the number of rows for the inverted left triangle.
$rows = 5; // You can change this to the number of rows you want.

// Loop through each row.
for ($i = $rows; $i >= 1; $i--) {
    // Loop to print the stars for the current row.
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    // Move to the next line for the next row.
    echo "\n";
}
?>

