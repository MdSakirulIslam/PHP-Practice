<!-- Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
Sample Output :
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) } -->
<?php
$x = array(1, 2, 3, 4, 5);

// print_r ($x);
// var_dump ($x);
echo '<br>';
unset($x[3]);
$y=array_values($x);
 print_r(array_values($x));
// print_r ($x);
// var_dump ($y);

    ?>