<?php
$originalArray = [5,10,15,20,25,30,35,40,47,13,7,11,17,23,29,31,37,41,43,47];

$reversedArray = array_reverse($originalArray);

// Printing the reversed array
foreach ($reversedArray as $element) {
    echo $element . " ".'<br>';
}
?>