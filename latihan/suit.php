<?php
function getComputer()
{
    $pilihan = ['batu', 'kertas', 'gunting'];
    return $pilihan[array_rand($pilihan)];
}

function tentukanPemenang($user, $computer)
{
    if ($user === $computer) {
        return "Seri!";
    }

    $kondisiMenang = [
        'batu' => 'gunting',
        'gunting' => 'kertas',
        'kertas' => 'batu',
    ];

    if ($kondisiMenang[$user] === $computer) {
        return "Anda menang!";
    } else {
        return "Komputer menang!";
    }
}

function getUser()
{
    echo "Masukkan pilihan Anda (batu, kertas, gunting): ";
    $handle = fopen("php://stdin", "r");
    $user = trim(fgets($handle));
    fclose($handle);

    return $user;
}

// Validasi input pengguna
function harusMemilih($choice)
{
    $pilihanValid = ['batu', 'kertas', 'gunting'];
    return in_array($choice, $pilihanValid);
}

echo "Selamat datang di permainan Suit Kertas Gunting Batu!\n";

$user = getUser();

if (!harusMemilih($user)) {
    echo "Pilihan tidak valid! Harap pilih antara 'batu', 'kertas', atau 'gunting'.\n";
    exit(1);
}

$computer = getComputer();

echo "Pilihan komputer: $computer\n";

$result = tentukanPemenang($user, $computer);
echo $result . "\n";
