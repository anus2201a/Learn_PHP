<?php


$age = 55;


/*if($age<100 && $age>50){  // we can use and
    echo "The person is an old man";
}*/


if($age<100 || $age>105){  // we can use or
    echo "The person is an Grand Father<br>";
}


if(!($age<50)){  // ! not is make the answer inverse
    echo "The person is a elder<br>";
}

if($age<30 xor $age>50){  //  only when one is True the answer is true 
    echo "The person is not a Grand Father<br>";
}
?>