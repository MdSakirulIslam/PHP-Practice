<?php
$multidimentional=[
    "Rafi"=>[
                "Bangla"=>81,
                "English"=>90,
                "math"=>85,
                "Physics"=>95
            ],
            "Roki"=>[
                "Bangla"=>57,
                "English"=>40,
                "math"=>87,
                "Physics"=>93
            ],
            "Kafi"=>[
                "Bangla"=>79,
                "English"=>55,
                "math"=>85,
                "Physics"=>65
            ],
            "Motin"=>[
                "Bangla"=>83,
                "English"=>91,
                "math"=>78,
                "Physics"=>75
            ],
            "Zohir"=>[
                "Bangla"=>50,
                "English"=>76,
                "math"=>75,
                "Physics"=>85
            ],
];
echo "<Table border=2px cellpadding=20px cellspacing=0 >
<tr>
    <th>Student Name</th>
    <th>Bangla</th>
    <th>English</th>
    <th>math</th>
    <th>Physics</th>
    </tr>";
foreach($multidimentional as $key=>$v1){
    echo "<tr>
            <td>$key</td>";
    foreach($v1 as $v2){
        
        echo "<td>$v2<t/d>";
    }
    echo "</tr>";
}
echo "</Table>";
?>