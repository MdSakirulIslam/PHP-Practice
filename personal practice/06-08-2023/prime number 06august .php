<?php
function boka($a,$b){
    $sum=$a+$b;
    // 
    for($i=1;$i<=$sum;$i++){
        $count=0;
        for($j=1;$j<=$i;$j++){

            if($sum%$j==0){
            $count++;

        }
    }
}

echo '<br>';
if ($count==2){
    echo "$sum is a prime number";
}
else{echo "$sum is not a prime number";}
}
boka(100,1);
// function boka($a, $b){
//     $sum = $a + $b;
//     if($sum % 2 == 0){
//         echo "tumi boka mea";
//     } else {
//         echo "tumi boka cele";
//     }
// }

// boka(2, 2);
    ?>
    <!-- $array=[3,4,5,6,7,8,9,11,22,23];
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

?> -->