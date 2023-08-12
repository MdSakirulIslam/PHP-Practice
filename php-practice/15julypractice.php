<?php
$a=100;
$b=10;
if($a>$b){
  echo $a."is greater than".$b;
}else{
  echo $b."greater than".$a;
}
echo "<br>";
$t= date('H');
echo gettype($t);
echo "<br>";
if($a==$b){
 echo $a."is equal".$b;
}
elseif($a!=50){
  echo"they are not equal";
}
else{
  echo $a."is Greater than".$b;
}

echo "Switch Statement".'<br>';

echo "1.Gallery".'<br>';
echo "2.Cricket".'<br>';
echo "3.Football".'<br>';
echo "4.Hockey".'<br>';

$z= 3;
switch($z){
  case 1:
    echo "1. Gallery";
  Case 2:
  echo "2. Cricket";
  case 3:
    echo "3. Football";

}

if($z==1){
  echo "1. Gallery";
}else if($z==2){
  echo "2. Cricket";
}else if($z==3){
  echo "3. Football";
}elseif($z==4){
  echo "3. Football";
}





?>