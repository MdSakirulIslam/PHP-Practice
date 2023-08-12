<?php
$mul=[
[1,"karim","dinajpur",10000],
[2,"sarid","rangpur",21000],
[3,"maril","jamalpur",15000],
[4,"tarin","pirajpur",20000],
[5,"narin","madaripur",33000]
];
// for($row=0;$row<5;$row++){
//     for($col=0;$col<4;$col++){
//     echo $mul[$row][$col]." ";
 
//     }

    foreach($mul as $key => $v1){
          
            foreach($v1 as $key1=> $v3){
                echo 'key :'.$key1.' value :'.$v3." ";
            }
    
            echo"<br>";
        }        
?>