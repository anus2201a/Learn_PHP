<?php


$marks = ['John'=>['Physcis'=>88,'chemistry'=>65,'Mathematics'=>76],
            'Alex'=>['Physcis'=>71,'chemistry'=>65,'Mathematics'=>91],
            'Watson'=>['Physcis'=>67,'chemistry'=>79,'Mathematics'=>84]];

echo "<table  border='2px' cellpadding='5px' cellspacing='0'>

     <tr>
        <th>Student Name </th>
        <th>Physcis </th>
        <th> Chemsitry</th>
        <th>Mathematics</th>
        
</tr>";
foreach($marks as $key=>$v1){
    echo "<tr>
            <td>$key</td>";
    foreach($v1 as $v2){
        echo "<td>$v2 </td>";
    }
    echo "</tr>";
}

echo "</table>";



echo "<pre>";
print_r($marks);
echo "</pre>";
?>