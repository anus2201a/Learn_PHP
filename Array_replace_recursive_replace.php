<?php

$colours = ['red','blue','orange','yellow'];

$cars = ['audi','corolla','bmw'];



$new = array_replace($colours, $cars);

echo "<pre>";
print_r($new);
echo "</pre>";



$name = ['a'=>'Ahemd','b'=>'baby','c'=>'cat'];
$full = ['a'=>'lala','b'=>'bacha','c'=> 'come'];

$m = array_replace_recursive($name, $full);

echo '<pre>';
print_r($m);
echo '</pre>';

?>