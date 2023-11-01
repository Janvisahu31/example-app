<?php
// This is a PHP program that generates the Fibonacci sequence.

// Define the number of terms you want in the Fibonacci sequence.
$terms = 10;

// Initialize the first two terms of the sequence.
$firstTerm = 0;
$secondTerm = 1;

// Print the initial terms of the sequence.
echo "Fibonacci Sequence ($terms terms): ";
echo $firstTerm . ", " . $secondTerm;

// Generate and print the rest of the sequence.
for ($i = 2; $i < $terms; $i++) {
    $nextTerm = $firstTerm + $secondTerm;
    echo ", " . $nextTerm;
    $firstTerm = $secondTerm;
    $secondTerm = $nextTerm;
}
?>

