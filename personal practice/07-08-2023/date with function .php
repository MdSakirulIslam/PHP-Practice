<?php 
$weekday=4;
switch($weekday){
    case 1:echo "Today is saturday";
    break;
    case 2:echo "Today is sunday";
    break;

    case 3:echo "Today is monday";
    break;
    case 4:echo "Today is tuesday";
    break;
    case 5:echo "Today is wednesday";
    break;
    case 6:echo "Today is thursday";
    break;
    case 7: case 8: case 9:echo "Today is friday";
    break;
    default: echo "enter the valid date";
}
    
?>