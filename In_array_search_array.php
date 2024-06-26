<?php



$Animals = array('Lion','Tiger','Cheeta','SnowLepord',);

if(in_array(55,$Animals,true)){
    echo 'Liger is found successfully';
}
else{
    echo "The Animal is not found sucessfully";

};

echo "<br>";

$Animals = ['Lion','Tiger','Cheeta','SnowLepord'];

echo array_search('Lion',$Animals);


echo '<br>';
$phones = ['Iphone'=>'Golden','Samsung'=>'Black','Motorolla'=>'Green'];

echo array_search('Golden',$phones);



?>