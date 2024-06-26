<?php

$name = "JOHN";
$age= 32;

if($name=="john"){
    echo "Your name is:" . $name;
}elseif($age>45){
    echo "Your eligible to ride the roller coaster.";
}else{
    echo "Your are not eligible to ride the roller coaster<br>";
}

$per = 120;
 
if($per>=80 && $per<=100){
    echo "You are in  Merit";
}elseif($per>=60 && $per<79){
    echo "You are in 1st division";
}elseif($per>=45 && $per<59){
    echo "Your are in 2nd division"; 
}elseif($per>=33 && $per<44){
    echo "You are in 3rd division";
}elseif($per<33){
    echo "You are fail";
}else{
    echo "Please Entre Valid Percentage.";
}
?>