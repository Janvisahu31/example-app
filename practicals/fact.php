<?php
function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($n == 0) {
        return 1; // The factorial of 0 is defined as 1.
    } else {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

$number = 5; // Change this to the number for which you want to calculate the factorial.
$factorial = factorial($number);
echo "The factorial of $number is: $factorial";
?>

