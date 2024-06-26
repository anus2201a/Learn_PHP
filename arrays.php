<?php


$fruits = ['apple',30,'mango',20,'strawberry',10,'blueberry','grapes'];

echo $fruits[0]."<br>";
echo $fruits[1]."<br>";
echo $fruits[2]."<br>";
echo $fruits[3]."<br>";


echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<ul>";

for($i=0;$i<=7;$i++){
    echo "<li>$fruits[$i] </li>";
}

echo "</ul>";
?>