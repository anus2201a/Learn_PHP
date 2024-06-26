<?php



function display($number){
    if($number<5){
        echo "$number  <br>";
        display($number +1);
    }
}

display(4);


function name($age){
    if($age > 1 && $age <=30 ){
        echo "The age of the person is :" .$age  ."<br>";
        name($age + 20);
    }
}
name(5);
  

function factorial($n){
    if($n==0 || $n==1){
        return 1;
}   else{
    return $n*factorial($n-1);
}
}

$f = factorial(5);
echo "The factorail of the number is :" .$f;
?>