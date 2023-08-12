<?php
$operation='/';
$a=10;
$b=20;
$c=30;
$d=40;
function operation($a,$b){
    $result=0;
if($a>$b){
    $result=$a+$b;
}
else if($b>$a){
    $result=$b-$a; 
}
return $result;
}
function operation1($a,$b){
    $result=0;
    $result = $a*$b;
    return $result;

}
function operation2($a,$b){
    if($a>$b){
        $result=$a/$b;

    }
    else if($b>$a){
        $result=$a/$b;
        echo $result; 
        exit;
    }
    return $result;
}
$value =0;
switch($operation){
    case '+':
       
         $value=operation($a,$b);
         break; 
        
    case '-':
            $value= operation($a,$d);
                break;
      
    case '*':
            $value= operation1($a,$b);
            break;      
    case '/':
             $value= operation2($a,$b);
             break;
           
}
echo $value;

?>