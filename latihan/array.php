<?php
// Definisikan array
$array = ['apel', 'jeruk', 'apel', 'pisang', 'jeruk', 'apel'];

// Inisialisasi array untuk menyimpan jumlah kemunculan
$counts = [];

// Hitung jumlah kemunculan setiap nilai
foreach ($array as $item) {
    if (isset($counts[$item])) {
        $counts[$item]++;
    } else {
        $counts[$item] = 1;
    }
}

// Tampilkan hasil
echo "Jumlah Kemunculan: ";
foreach ($counts as $item => $count) {
    echo " $item: $count";
}
?>
