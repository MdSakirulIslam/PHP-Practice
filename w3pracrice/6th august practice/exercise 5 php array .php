<!-- $color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.
Expected result : white -->
<?php
// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
$color = array(4 => 'white', 11=> 'red', 6 => 'green');

// echo reset ($color);
// echo ($color[4]);
foreach($color as $key=>$v1)
if($key%2==0){
    echo  $key.' is even  and value is :'.$color[$key].'<br>' ;
}
else{
    echo  $key.' is odd  and value is :'.$color[$key].'<br>' ;
}
?>