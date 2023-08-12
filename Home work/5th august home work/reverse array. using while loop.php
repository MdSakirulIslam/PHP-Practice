<?php
$a = array(2, 5, 9, 11, 17, 20);

$arrayLength = count($a);
// echo $arrayLength;
// exit;

$i = 0;
while ($i < $arrayLength) {
    echo $a[$i] . " ";
    $i++;
}

echo '<br>';

$i = $arrayLength - 1;
while ($i >= 0) {
    echo $a[$i] . " ";
    $i--;
}
?>
