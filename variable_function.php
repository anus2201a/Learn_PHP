<?php


function sentence(){
    echo "New varaible function";
}

$words = "sentence";
$words();

echo "<br>";

$info = function ($name){
    echo "My name is: " .$name;
};

$info('laravel');


?>