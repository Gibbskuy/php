<?php
$angka = 10;

if ($angka > 5) {
    echo "Angka lebih besar dari 5\n";
}

// menentukan kondisi ketika if tidak memenuhi syarat
$angka = 4;

if ($angka > 5) {
    echo " Angka lebih besar dari 5" . "<br>";
} else {
    echo " Angka 5 atau kurang" . "<br>";
}

// menentukan lebih dari 1 kondisi

$angka = 7;

if ($angka > 10) {
    echo " Angka lebih besar dari 10" . "<br>";
} elseif ($angka > 5) {
    echo " Angka lebih besar dari 5 tetapi 10 atau kurang" . "<br>";
} else {
    echo " Angka 5 atau kurang" . "<br>";
}


?>
