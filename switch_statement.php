<?php

$weekday = 2;

switch($weekday):
    case 1:
        echo "Today is Monday.";
    break;
    case 2:
        echo "Today is Tuesday.";
    break;
    case 3:
        echo "Today is Wednesday.";
    break;
    case 4:
        echo "Today is Thursday.";
    break;
    case 5:
        echo "Today is Friday.";
    break;
    
    default:"Enter a Valid Weekday";
    break;
    endswitch;


$age = 61;
switch(true):
    case ($age>=12 && $age<18):
        echo "Not eligible too young for this.";
    break;
    case ($age>=18 && $age<25):
        echo "You are eligible and new to ride the roller coaster.";
    break;
    case ($age>=25 && $age<35):
        echo "You are perfect for the ride of the coaster.";
    break;
    case ($age>=35 && $age<45):
        echo "You are eligible but ride on your own responsiblity";
    break;
    case ($age>=45 && $age<60):
        echo "You are not eligible to ride too old";
    break;
    default:
        echo "Enter a Valid Age";
    break;
    endswitch;


  
?>