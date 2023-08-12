<?php
function swap($a, $b) {

    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "After swapping: a = $a, b = $b";
}

$a = 5;
$b = 10;


echo "Before swapping: a = $a, b = $b<br>";

swap($a, $b);

$c = 5;
$d = &$c; // Creating a reference to $a


?>
