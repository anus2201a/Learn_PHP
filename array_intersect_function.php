<?php

function compare($c,$b){
    if($c === $b) {
        return 0;
    }
    return ($c > $b) ?1:-1;
    }


$colours = ['a'=>'red', 'f'=>'blue','g'=>'orange','h'=>'yellow'];
$a = ['a'=>'red','b'=>'blue','h'=>'orange'];



$new = array_intersect_key($colours, $a);
$p = array_intersect_uassoc($colours, $a,"compare");
$g = array_uintersect($colours, $a,"Compare");

echo "<pre>";
print_r($g);
echo "</pre>";

?>