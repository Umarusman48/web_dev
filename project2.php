<?php
for ($i = 1; $i <= 5; $i++) {
    $factorial = 1;
    if ($i == 0 || $i == 1) {
        $factorial = 1;
    } else {
        for ($j = $i; $j >= 1; $j--) {
            $factorial *= $j;
        }
    }
    echo "Factorial of $i is: $factorial <br>";
}
?>