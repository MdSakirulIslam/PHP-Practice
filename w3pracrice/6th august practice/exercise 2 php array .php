<!-- Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

green
red
white -->
<?php
 $color = array('white', 'green', 'red');
 sort ($color);
 foreach($color as $value){
   
    echo "<ul>";
    echo "<li>",$value,"</li>";
    echo "</ul>";
 }
 
// $color = array('white', 'green', 'red');
// foreach ($color as $c)
// {
// echo "$c, ";
// }
// // sort($color);
// echo "<ul>";
// foreach ($color as $y)
// {
// echo "<li>$y</li>";
// }
// echo "</ul>";
?>
