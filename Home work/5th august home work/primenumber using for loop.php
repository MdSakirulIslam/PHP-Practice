<?php
$a=array(2,5,9,11,17,20);
$count=0;
for($i=0;$i<count($a);$i++){
    $count =0;
    for($j=1;$j<=$a[$i];$j++){

       if($a[$i]%$j == 0){

        $count++;

       }
    }
    echo "<br>";
        if($count==2){
            echo $a[$i]. 'is prime';
        }
        else 
        { 
            echo $a[$i]."not a prime number";
        }
}



?>
