<?php

$colours = ['red','blue','orange','yellow'];

$cars = ['audi','corolla','bmw'];


$new = array_merge($colours, $cars);

echo "<pre>";
print_r($new);
echo "</pre>";

// recursive array


$col = ['a'=>'red','b'=>'blue','c'=>'orange','d'=>'yellow'];
$c = ['e'=>'purple','f'=>'brown','a'=>['black'=>['skyblue','grey','pink']],90,89];


$k = array_merge_recursive($col, $c);
echo "<pre>";
print_r($k);
echo "</pre>";




$colours = ['red','blue','orange','yellow'];

$cars = ['audi','corolla','bmw','honda'];



$m = array_combine($colours, $cars);

echo "<pre>";
print_r($m);
echo "</pre>";



?>