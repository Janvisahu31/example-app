<?php
function isNeon($number) {
    $sumOfDigits = 0;
    $squaredSum = 0;
    
    // Calculate the sum of digits
    $num = $number;
    while ($num > 0) {
        $digit = $num % 10;
        $sumOfDigits += $digit;
        $num = (int)($num / 10);
    }
    
    // Square the sum of digits
    $squaredSum = $sumOfDigits * $sumOfDigits;
    
    return $squaredSum == $number;
}

$number = 9; // Replace with the number you want to check for being a neon number

if (isNeon($number)) {
    echo "$number is a neon number.";
} else {
    echo "$number is not a neon number.";
}
?>

