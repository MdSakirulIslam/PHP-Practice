<?php

$inter = [1, 2, 3, 4, 7, 10, 15, 20];

$count = count($inter);

for ($i = 0; $i < $count - 1; $i=$i+2) {
    $temp = $inter[$i];
    $inter[$i] = $inter[$i + 1];
    $inter[$i + 1] = $temp;
}

echo '<pre>';
print_r($inter);
echo '</pre>';
?>