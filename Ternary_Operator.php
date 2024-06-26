<?php


$x = 5;
// conditon ?:True:False
//($x>=4) ? $z = "Greator" : $z = "Smaller";
//echo $z;



//$z = ($x<=4)? "Greator": "Smaller";
//echo $z;


$z = "The Value is " . ($x >=4 ? "Greator":"Smaller");
echo "$z<br>";


$name = "laravel";
$info = "The name of the framework is " . ($name=="laravel" ? "Go and learn PHP":"Go learn Laravel");
echo $info;
?>