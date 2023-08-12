<?php
// Function to check if a number is even
function isEven($number) {
    return $number % 2 === 0;
}

// Function to check if a number is odd
function isOdd($number) {
    return $number % 2 !== 0;
}

// Variables to define the range of numbers
$start = 1;
$end = 20;

// Initialize a variable to store the current number
$currentNumber = $start;

// Loop through the range and check if each number is even or odd
while ($currentNumber <= $end) {
    if (isEven($currentNumber)) {
        echo $currentNumber . ' is even.'.'<br>'. PHP_EOL;
    } else {
        echo $currentNumber . ' is odd.'.'<br>'. PHP_EOL;
    }

    // Increment the current number for the next iteration
    $currentNumber++;
}
?>
