<?php
function deretAngka($panjang)
{
    // Inisialisasi variabel untuk menyimpan deret
    $deret = [];

    // Loop untuk menambahkan angka dan huruf sesuai pola
    for ($i = 1; $i <= $panjang; $i++) {
        if ($i % 2 != 0) { // Jika ganjil, tambahkan angka
            $deret[] = $i;
        } else { // Jika genap, tambahkan huruf
            // Menggunakan ASCII untuk mengonversi angka ke huruf
            $huruf = chr(96 + $i); // 96 adalah ASCII untuk karakter sebelum 'a'
            $deret[] = $huruf;
        }
    }

    // Gabungkan deret menjadi string dengan spasi
    echo implode(' ', $deret);
}

// Panggil fungsi dengan panjang deret yang diinginkan
deretAngka(8); // Panjang deret diatur ke 8 untuk menghasilkan: 1 b 3 d 5 f 7 h
