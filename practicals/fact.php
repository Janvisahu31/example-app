<?php
// This is a PHP program that calculates the factorial of a number.

// Define the number for which you want to calculate the factorial.
$number = 5;

// Initialize the factorial to 1.
$factorial = 1;

// Print the number for which the factorial is being calculated.
echo "Factorial of $number: ";

// Calculate the factorial of the number.
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

// Print the result.
echo $factorial;
?>

