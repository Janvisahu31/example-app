<?php
function generateFibonacci($n) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$n = 10; // Change this to the number of Fibonacci numbers you want
$fibonacciNumbers = generateFibonacci($n);

foreach ($fibonacciNumbers as $number) {
    echo $number . " ";
}

?>

