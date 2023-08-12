<?php
$multidimentional=[
    [1,'Rafsan','Testing',78002023],
    [2,'Ahasan','glue line',78001849],
    [3,'Shakil khan','ME',78001858],
    [4,'Shakirul','SMT',78001859],
    [5,'Islam','Foam paste',78001857],
];
// echo "<pre>";
// echo print_r($multidimentional).'<br>';
// echo "</pre>";

// for($row=0;$row<5;$row++){
//     for($col=0;$col<4;$col++){
//         echo $multidimentional[$row][$col]." ";
//     }
//     echo "<br>";
// }
echo "<table border=2px cellpadding=10px cellspacing=0 >";
echo "<tr>
            <th> Serial</>
            <th>Empolyee Name</>
            <th>Department</>
            <th>Employee ID</>



    </tr>";
foreach($multidimentional as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>