<?php
$a = array(2, 5, 9, 11, 17, 20);
// $count = 0;
$i = 0;


while ($i < count($a)) {
    $count = 0;
    $j = 1;

    while ($j <= $a[$i]) {
        if ($a[$i] % $j == 0) {
            $count++;
        }
        $j++;
    }

    echo "<br>";
    if ($count == 2) {
        echo $a[$i] . ' is a prime number';
    } else {
        echo $a[$i] . " is not a prime number";
    }

    $i++;
}


?>