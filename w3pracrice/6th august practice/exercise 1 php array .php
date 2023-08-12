<!-- Write a script which will display the following string - -->
<?php
$color = ['w'=>'white','g'=> 'green','b' =>'blue','c'=> 'black'];

// echo "The newspaper was fully $color[0].in the front page.".'<br>'."the tree has full by $color[1]leaf.".'<br>'."The sky is $color[2].".'<br>'."The color of this bike is $color[3].";
foreach($color as $key=>$v1){
    echo '<pre>';
    echo $key." for".' '.$v1;
    echo '</pre>';
}

?>