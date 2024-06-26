<?php




$Animals = ['Lion','Tiger','Cheeta','SnowLepord']; //one dimensional arrays


//echo count($Animals);

//echo sizeof($Animals);
$data = ['Animals'=>['Lion','Tiger','Cheeta','SnowLepord'], //two dimesional arrays
        'Cars'=>['Toyota','BMW','Corolla',]];


//echo count($data["Cars"],2);      


//$len = count($Animals);


//for($i= 0; $i<$len; $i++) {
//    echo $Animals[$i] . "<br>";}

echo print_r(array_count_values($data['Cars']));
echo   "<br>";
echo print_r(array_count_values($Animals));
?>