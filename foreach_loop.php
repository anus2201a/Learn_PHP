<?php



$games = ['counter strike','pubg','call of duty','clash royal'];

foreach ($games as $game) {
    echo ''. $game .'<br>';
}


$ga = ['counter strike'=> 1.6,  
        'pubg'=> "Mobile and web",
        'call of duty'=>"with better hd graphics",
        'clash royal'=>"The most little time game",];
echo "<ul>";
foreach ($ga as $game =>$features) { // calling with $key => $value for asscociative array
    echo "<li>$game  = $features </li><br>";
}
echo "</ul>";
?>