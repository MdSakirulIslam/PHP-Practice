<?php
function test($x, $y) 
{
    return $x == $y ?
     ($x + $y)*3 : $x + $y;


    // if($x==$y){
    //     echo ($x+$y)*3;
    // }else if ($x!=$y){
    //     echo $x+$y;
    // }


}
echo test(1, 2)."<br>";
echo test(3, 2)."<br>";
echo test(2, 2)."<br>";   
?>