<?php 
$a = 9;
$b = 4;
$luas_a = $a * $a * $a;
$luas_b = $b * $b * $b;
$total = $luas_a * $luas_b;
echo $total;
echo "<hr>";//---------------------------------------
function total_luas_dua_kubus ($a, $b){
    $luas_a = $a * $a * $a;
    $luas_b = $b * $b * $b;
    $total = $luas_a * $luas_b;
    $luas_a = $a * $a * $a;
    $luas_b = $b * $b * $b;
    
    return " Total Luas Dari Kubus A Dengan Sisi $a dan Kubus B Dengan Sisi $b Adalah $total ";
}

echo total_luas_dua_kubus (9, 4);
echo "<br>";
echo total_luas_dua_kubus (10, 15);
echo "<br>";
echo total_luas_dua_kubus (100, 200);

























?>