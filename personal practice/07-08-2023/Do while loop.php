<?php
$a=11;
$i=1;
$count=0;
do{
    $j=1;

  
    do{
        if($a % $j ==0){ 
            $count++;
           
        }
        $j++;
    }while(  $j<=$i);

    $i++;

}while($i<=$a);

if($count==2){
    echo 'this is a prime number';
}
else{
    echo'this is not a prime number';
}


// <?php
// $a = 2;

// $count = 0;
// $i = 1; // Initialize i outside the loop

// do {
//     $j = 1; // Initialize j inside the loop
//     do {
//         if ($a % $j == 0) {
//             $count++;
//         }
//         $j++;
//     } while ($j <= $i); // Adjust the condition

//     $i++;
// } while ($i <= $a); // Adjust the condition

// if ($count == 2) {
//     echo 'This is a prime number';
// } else {
//     echo 'This is not a prime number'; // Added 'echo' here
// }

// <?php
// $a = 13;
// $count = 0;
// $i = 1;

// do {
//     $j = 1;

//     do {
//         if ($i % $j == 0) { 
//             $count++;
//         }  
//         $j++;
//     } while ($j <= $i);

//     if ($count == 2) {
//         echo "$i is a prime number\n";
//     } else {
//         echo "$i is not a prime number\n";
//     }

//     $i++;
//     $count = 0;

// } while ($i <= $a);


?>

