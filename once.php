<?php


for($i=0; $i<8; $i++){
    for($j=0 ; $j<$i; $j++){
    echo " * ";}
echo "<br>";}
echo"<br>";








for($i=8; $i>=1; $i--){

    for($j=0 ; $j<$i; $j++){
        echo "* &nbsp;&nbsp";}   
echo"<br>";}
echo"<br>";

for($i=0; $i<8; $i++){
    for($j=0 ; $j<$i; $j++){
        
    echo " &nbsp;&nbsp;*&nbsp;&nbsp;" ;}
echo "<br>";}
echo"<br>";


$string="hello" . " " . "world";
echo $string;
echo "<br>";


echo "<br>";

$height = 5;

for($i=1;$i<=$height;$i++){

    for($t = 1;$t <= $height-$i;$t++)
    {
        echo "&nbsp";
    }

    for($j=1;$j<=$i;$j++)
    {
        // use &nbsp; here to procude space after each asterix
        echo "*&nbsp;&nbsp;&nbsp;";
    }
echo "<br />";
}




?>