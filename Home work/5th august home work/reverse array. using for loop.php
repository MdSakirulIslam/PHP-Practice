<?php
$a = array(2,5,9,11,17,20);

$arrayLength = count($a);
// echo $arrayLength;
// exit;

for ($i = 0; $i < $arrayLength; $i++) {
    echo $a[$i] . " ";
}

echo '<br>';
for ($i = $arrayLength - 1; $i >= 0; $i--) {
    echo $a[$i] . " ";
}
?>
