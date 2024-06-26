<?php


$data= [

//   0     1          2       3
    [1,"Mike tyson","Boxer",25000000], // 0
    [2,"Muhammad Ali","Goat",100000000], // 1                           // 2d Multidimensinal array
    [3,"khabib","Fighter",3500900],    //  2
    [4,"Islam","Champion",50000000]  //  3
];

echo "<pre>";
print_r($data);
echo "</pre>";



echo $data[1][1];

echo "<br>";

for ($row= 0; $row< 4; $row++){             //nested loops
    for( $col= 0; $col< 4; $col++){                           
        echo $data[$row][$col] . " ";
}
    echo "<br>";                                
}


echo "<Table border='2px' cellpadding='5px' cellspacing='0' >";
echo "<tr>
        <th>User Id.</th>
        <th>Name.</th>
        <th>Designation.</th>
        <th>Salary.</th>
      </tr>";    

foreach($data as $d1){
    echo "<tr>";
    foreach($d1 as $d2){
        echo "<td> $d2 </td>";
    }

    echo "</tr>";
}
echo "</table>";

foreach($data as $d1){
    foreach($d1 as $d2){
        echo $d2 . " ";  // Output each element of $d1 with a space separator
    }
    echo "<br>";  // Break line after each row
}
echo "<br>"; 

?>
