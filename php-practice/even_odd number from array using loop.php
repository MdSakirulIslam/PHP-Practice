<?php
// Step 1: Create the array of numbers
$numbers = [6,10,15,21,26,30,37,40,47,13];

// Step 2: Initialize arrays to store even and odd numbers
$even = array();
$odd = array();

// Step 3: Use a while loop to iterate through the array
$index = 0;
$count = count($numbers);
// echo $count;
// exit;
while ($index < $count) {
    // Step 4: Check if the current number is even or odd
    if ($numbers[$index] % 2 === 0) {
        // Step 5: Append even numbers to the 'even' array
        $even[] = $index.' :'.$numbers[$index];
    } else {
        // Step 5: Append odd numbers to the 'odd' array
        $odd[] = $index.' :                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ' . $numbers[$index];
    }
    
    // Step 6: Increment the index to move to the next element in the array
    $index++;
}

// Step 7: Display the results
echo "Even numbers: " . implode(", ", $even). "<br>" ;
echo "Odd numbers: " . implode(", ", $odd);
// ?>
