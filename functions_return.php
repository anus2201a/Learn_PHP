<?php



function subject($math,$eng,$chem){
    $a = $math + $eng + $chem;
    return $a;
}


function  percentage($st){
    $per = $st/3;
    echo $per;
}


$total = subject(76,56,98);

percentage($total);

echo $total;



?>
