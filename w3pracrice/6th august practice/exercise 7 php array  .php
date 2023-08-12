<?php
$x = array(1, 2, 3, 4, 5);

// print_r ($x);
var_dump ($x);
echo '<br>';
unset($x[3]);
$y=array_values($x);
// print_r ($x);
var_dump ($y);

    ?>