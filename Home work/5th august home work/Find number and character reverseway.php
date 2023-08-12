<?php
$a=['a',1,'b',2,'c',3,'d',4];
// $a=array('a',1,'b',2,'c',3,'d',4);
$numbers =array();
$characters=array();
for($i=count($a)-1;$i>=0;--$i){
    if(is_numeric($a[$i])){
        $numbers[]=$a[$i];
    }
    else{
        $characters[]=$a[$i];
    }
}
echo "Numbers: " . implode(', ', $numbers) . "<br>";
echo "Characters: " . implode(', ', $characters) . "<br>";

// echo "Numbers: ";
// print_r($numbers);
// echo '<br>';
// echo "Characters: ";
// print_r($characters);
echo "bangladesh";v
?>                                                                                                                                                                                          


