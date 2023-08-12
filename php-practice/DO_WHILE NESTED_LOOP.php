<?php
$a=[2,5,8,11];
$i=0;
$j=1;
$c=count($a);
dO{
    // $count=0;
    do{ 
        if($i%$j==0){
            $count=0;
        }
        $j++;
    }while( $j<=$a[$i] );

    if($count == 2){
        echo "$i Number is a prime number";
       }   
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
}
while($i<$c);
?>


