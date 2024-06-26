<?php

// function by reference value
function wow($name){
    $name = "Laravel";

}

$language = "PHP";

wow($language);
echo $language;


// function reference by agrument
function cricket(&$batsman){

    $batsman = "LAla"; 
        
}
echo "<br>";
$bowler = "amir";
cricket($bowler);
echo $bowler;

echo "<br>";
function first($number){  //function  by value
    $number +=10; 
}


function second(&$number){ // function by reference 
    $number +=6;
}


$num = 8;
first($num);
echo "The original value is : " .$num;
echo "<br>";
second($num);
echo "The original value is : " .$num;


?>