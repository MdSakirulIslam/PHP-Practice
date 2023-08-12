<?php
$a=['a',1,'b',2,'c',3,'d',4];
$numbers =array();
$characters=array();
for($i=0;$i<count($a);$i++){
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

?>


