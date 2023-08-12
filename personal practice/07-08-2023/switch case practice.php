<?php
$num=11;
$count=0;
for($i=1;$i<=$num;$i++){
    if ($num % $i== 0){
        $count++;
    }    
}

switch($count){
case 2:
    echo "this is a prime number";
    break;
default:
echo "this is not a prime number";

}

?>
