<?php
// $a=[10,5,2,8,15,20,5,6];
// $count = count($a);
// for($i=0;$i<$count-1;$i++){
//     if($a[$i]<$a[$i+1] & )
// }

$a = [10, 5, 2, 8, 15, 20, 5, 6];
$count = count($a);
$max = $a[0]; // Initialize max with the first element
$min = $a[0]; // Initialize min with the first element

for ($i = 1; $i < $count; $i++) {
    if ($a[$i] > $max) {
        $max = $a[$i]; // Update max if current element is greater
    }
    
    if ($a[$i] < $min) {
        $min = $a[$i]; // Update min if current element is smaller
    }
}

echo "Maximum number: " . $max . "\n";
echo "Minimum number: " . $min . "\n";

?>