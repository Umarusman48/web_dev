<?php
$numbers = array(7, 3, 12, 5, 9, 8);

function findMin($arr) {
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

function findMax($arr) {
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

function findSecondLargest($arr) {
    $largest = findMax($arr);
    $secondLargest = null;
    foreach ($arr as $value) {
        if ($value < $largest && ($secondLargest === null || $value > $secondLargest)) {
            $secondLargest = $value;
        }
    }
    return $secondLargest;
}

echo "Original Array: <br>";
print_r($numbers);
echo "<br>";

$minValue = findMin($numbers);
echo "Minimum Value: $minValue <br>";

$maxValue = findMax($numbers);
echo "Maximum Value: $maxValue <br>";

$secondLargestValue = findSecondLargest($numbers);
echo "Second Largest Value: $secondLargestValue <br>";

sort($numbers);
echo "Array Sorted in Ascending Order: <br>";
print_r($numbers);
echo "<br>";

rsort($numbers);
echo "Array Sorted in Descending Order: <br>";
print_r($numbers);
echo "<br>";
?>
