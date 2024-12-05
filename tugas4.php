<?php
function luasPersegi($sisi) {
    return $sisi * $sisi;
}

function sisiMiring($a, $b) {
    return sqrt(pow($a, 2) + pow($b, 2));
}

$sisi = 5;
$luas = luasPersegi($sisi);
echo " Menghitung Luas Persegi <br>";
echo "Sisi persegi: $sisi<br>";
echo "Luas persegi: $luas<br><br>";


$a = 3; // alas
$b = 4; // tinggi
$c = sisiMiring($a, $b);
echo " Menghitung Sisi Miring Segitiga <br>";
echo "Panjang alas: $a<br>";
echo "Panjang tinggi: $b<br>";
echo "Sisi miring segitiga: $c<br>";
?>