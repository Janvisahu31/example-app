<?php
function fibonacciIterative($n) {
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;
    
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

// Change the value of $n to the desired number of Fibonacci sequence elements
$n = 10;
$fibonacciSeries = fibonacciIterative($n);

foreach ($fibonacciSeries as $value) {
    echo $value . " ";
}
?>

