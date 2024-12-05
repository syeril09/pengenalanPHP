<?php
// Memberikan nama variabel untuk array siswa
$siswa = array(
    array(135410154, "Bima", "Teknik Kendaraan Ringan"),
    array(125610983, "Nisa", "Teknik Kendaraan Ringan"),
    array(135596948, "Pandu", "Multimedia"),
    array(145293833, "Niken", "Teknik Komputer dan Jaringan")
);

// Loop utama untuk mengiterasi setiap baris (siswa)
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Siswa Index Ke-$row</b></p>";
    echo "<ul>";

    // Loop untuk mengiterasi setiap kolom (data siswa)
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$siswa[$row][$col]."</li>";
    }

    echo "</ul>";
}
?>