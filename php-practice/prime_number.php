<?php
$array=[3,4,5,6,7,8,9,11,22,23];
$count=0;
for($i=0;$i<=count($array);$i++){
    $count=0;
for($j=1;$j<=$array[$i];$j++){

    if($array[$i]%$j==0){

    $count++;
}

}
echo '<br>';
if($count==2){
    echo $array[$i]."is a prime number";
}
else{
    echo $array[$i]."is not a prime number";
}
}

?>