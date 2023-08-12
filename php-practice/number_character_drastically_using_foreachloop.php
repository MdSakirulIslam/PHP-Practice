<?php
// Input array containing characters
$inputArray = ['a', 'b', 'c'];

// Array with character replacements
$replacements = [
    'a' => 'apple',
    'b' => 'ball',
    'c' => 'cat',
];

// Loop through the input array and replace characters
foreach ($inputArray as &$character) {
    if (isset($replacements[$character])) {
        $character = $replacements[$character];
    }
}

// Output the modified array
print_r($inputArray);
?>

