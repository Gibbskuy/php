<?php
$mahasiswa = [
    ["nama" => "Ali", "umur" => 20],
    ["nama" => "Budi", "umur" => 22],
];

// Menampilkan data mahasiswa
foreach ($mahasiswa as $mhs) {
    echo "Nama: " . $mhs["nama"] . ", Umur: " . $mhs["umur"] . "<br>";
}
