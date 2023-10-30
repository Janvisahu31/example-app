<?php
function isArmstrong($number) {
    $num = $number;
    $total = 0;
    $numDigits = strlen($number);

    while ($num > 0) {
        $digit = $num % 10;
        $total += pow($digit, $numDigits);
        $num = (int)($num / 10);
    }

    return $total == $number;
}

$number = 153; // Replace with the number you want to check for being an Armstrong number

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>

