<?php

$count = 0;

for( $i=1 ; $i<=6 ; $i++ ){
    
    if($count<3){
        $count++;
        echo $count;
       
    }
    else if($count==3  || $count >3){
        // echo $count;
        $count--;
    }
   

    }
?>