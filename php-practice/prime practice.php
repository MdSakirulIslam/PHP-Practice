<?php

// Function to check if a number is prime
function isPrime($num) {
    // echo $num;
    // exit;
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

// Function to find prime numbers from an array
function findPrimeNumbersFromArray($array) {
    $primeNumbers = array();

    foreach ($array as $num) {
        if (isPrime($num)) {
            $primeNumbers[] = $num;
        }
    }

    return $primeNumbers;
}

// Example usage:
$numbersArray = array(5,10,15,20,25,30,35,40,47,13,7,11,17,23,29,31,37,41,43,47);
$primeNumbersArray = findPrimeNumbersFromArray($numbersArray);

echo "Prime numbers in the array: " .'<br>'. implode('<br> ', $primeNumbersArray).'<br  >';
$reversearray=array_reverse($numbersArray);
foreach($reversearray as $element){
echo "Prime numbers in the array reverse order:".' <br>';
 echo $element.' <br>';

}
?>
