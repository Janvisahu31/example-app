<?php
// This is a PHP program that swaps the values of two numbers.

// Define two variables to hold the numbers.
$number1 = 10;
$number2 = 20;

// Print the original values.
echo "Original Values: ";
echo "Number 1: " . $number1 . ", Number 2: " . $number2 . "<br>";

// Swap the values of the two numbers using a temporary variable.
$temp = $number1;
$number1 = $number2;
$number2 = $temp;

// Print the swapped values.
echo "Swapped Values: ";
echo "Number 1: " . $number1 . ", Number 2: " . $number2 . "<br>";
?>

