<?php

for($x=1;$x<=10;$x++){
    if($x==3){
    goto abc;}

    echo $x;
}


echo "Hello";
abc: echo "This is new code.";



//echo "old code<br>";
//echo "old code<br>";
//echo "old code<br>";
//echo "old code<br>";
//goto abc;
//echo "old code<br>";
//echo "old code<br>";
//echo "old code<br>";
?>