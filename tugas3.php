<?php

echo "Kode Program PHP - Luas Persegi";
echo "<hr>";


// SYNTAX 1
function luas1($panjang, $lebar) {
    return $panjang * $lebar; 
}

// SYNTAX 2
function luas2($panjang, $lebar) {
    echo "Luas Persegi 2 = " . ($panjang * $lebar);
}


$hasil = luas1(10, 5); 
echo "<br>Luas Persegi 1 = " . $hasil;
echo "<br>";

luas2(10, 5);
?>