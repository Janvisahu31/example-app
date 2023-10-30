<?php
function fibonacciLoop($n) {
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

$n = 10; // Number of Fibonacci numbers to generate
$result = fibonacciLoop($n);

echo "Fibonacci Sequence (using loop):\n";
for ($i = 0; $i < $n; $i++) {
    echo $result[$i] . " ";
}
?>

