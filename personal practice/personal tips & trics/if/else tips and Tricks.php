<?php
#এটা if/else এর tips and trics.

function getGender($user_is_male=true){
    if($user_is_male)
    return "user is male";
return "user is female.=> পরের বার return দিলে, else এর কাজ হয়ে যায় ";
}
$a=getGender(false);
echo $a;
?>