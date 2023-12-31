<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    if ($number <= 3) {
        return true;
    }

    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }

    for ($i = 5; $i * $i <= $number; $i = $i + 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
    }

    return true;
}

$number = 17; // Replace with the number you want to check for primality

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>

