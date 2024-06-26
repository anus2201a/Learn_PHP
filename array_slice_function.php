<?php


//$colours = ['red','blue','orange','yellow'];


$colours = ['a'=>'red','b'=>'blue','c'=>'orange',9=>'yellow'];

$n = array_slice($colours,-2,2,true);


echo "<pre>";
print_r($n);
echo "</pre>";




?>