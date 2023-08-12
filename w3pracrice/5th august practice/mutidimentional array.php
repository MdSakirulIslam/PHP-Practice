<?php
$salary=[
    ["Name"=>"sakib","office name"=>"smc company","position"=>"manager","salary"=>50000],
    ["Name"=>"sakil","office name"=>"grammeen company","position"=>"officer","salary"=>60000],
    ["Name"=>"sakir","office name"=>"rfl company","position"=>"assistant","salary"=>70000],
    ["Name"=>"sakim","office name"=>"squre company","position"=>"managing director","salary"=>80000],
];
echo "<table border='2px' cellpadding='5px' cellspacing='0' >";
// for heading we can write.
echo "<tr>
         <th>Name</th>
         <th>office name</th>
         <th>position</th>
         <th>salary</th>
    </tr>";
foreach($salary as $key=>$value){
    echo "<tr>";
    foreach($value as $item){
        echo "<td> $item </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>