<?php
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}

$number1 = 36; // Replace with the first number
$number2 = 48; // Replace with the second number

$result = gcd($number1, $number2);
echo "The GCD of $number1 and $number2 is $result";
?>

