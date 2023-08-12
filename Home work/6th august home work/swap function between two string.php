
<?php
function swap(&$a,&$b){
    echo '<br>';
    echo $a.' '.$b;
    echo '<br>';

    $temp=$a;
    $a=$b;
    $b=$temp;
}
$a="shakil";
$b="Afsana";
echo "This is original string a=$a,and b=$b". '<br>';
swap($a,$b);
echo "This is new string a=$a,and b=$b";
?>