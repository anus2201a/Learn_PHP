<?php

$a = "PHP";

function test(){
    global $a;
    echo "The name of the lanaguage is :" .$a . " inside the function.<br>";
}

test();
echo "The name of the language is :" .$a. " outside the function.<br>";




function name(){
    $b = " laravel";
    echo "The framework of the PHP language is :" .$b;
}


//name();
//echo $b; // by defining the local varaible outside the function gives an error.So we have to so Global 

$x = 5;
$y = 10;


function number(){
    global $x ,$y;
    $x = $x + $y;
}
number();
echo $x;


?>