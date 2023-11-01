<?php
$rows = 5; // Change the number of rows as per your requirement

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i - 1; $j++) {
        echo " ";
    }
    for ($k = $i; $k <= $rows; $k++) {
        echo "* ";
    }
    echo "<br>";
}
?>

