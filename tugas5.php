<?php
function luasPersegi($sisi) {
    return $sisi * $sisi;
}

function sisiMiring($a, $b) {
    return sqrt(pow($a, 2) + pow($b, 2));
}

function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

function kelilingSegitiga($a, $b, $c) {
    return $a + $b + $c;
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
echo "Sisi miring segitiga: $c<br><br>";

$alasSegitiga = 5;
$tinggiSegitiga = 6;
$keliling = kelilingSegitiga($a, $b, $c);
$luas = luasSegitiga($alasSegitiga, $tinggiSegitiga);

echo " Menghitung Luas dan Keliling Segitiga <br>";
echo "Alas segitiga: $alasSegitiga<br>";
echo "Tinggi segitiga: $tinggiSegitiga<br>";
echo "Luas segitiga: $luas<br>";
echo "Keliling segitiga: $keliling<br>";
?>