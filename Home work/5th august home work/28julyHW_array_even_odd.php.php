<?php
$a=[5,10,15,20,25,30,35,40,47,13,7,11,17,23,29,31,37,41,43,47];
$length=count($a);
for($i=0;$i<$length;$i++)
// echo $a[$i];
// echo '<br>';

if($a[$i]%2==0){
    // echo $i;
    //  exit;
    echo "The number is even = ".$a[$i].'<br>';
}
else{
    echo "The number is odd = ".$a[$i].'<br>';
}
?>