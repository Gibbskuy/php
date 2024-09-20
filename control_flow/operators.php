<?php
// Arithmetic Operators
$a = 10;
$b = 3;

echo " Penjumlahan: " . ($a + $b) . "<br>"; // 13
echo " Pengurangan: " . ($a - $b) . "<br>"; // 7
echo " Perkalian: " . ($a * $b) . "<br>"; // 30
echo " Pembagian: " . ($a / $b) . "<br>"; // 3.3333
echo " Persen: " . ($a % $b) . "<br>"; // 1


// Comparison Operators
$a = 5;
$b = 10;

echo "Sama dengan: " . ($a == $b) . "<br>"; // false
echo "Tidak sama dengan: " . ($a != $b) . "<br>"; // true
echo "Lebih besar dari: " . ($a > $b) . "<br>"; // false
echo "Lebih kecil dari: " . ($a < $b) . "<br>"; // true
echo "Lebih besar atau sama dengan: " . ($a >= $b) . "<br>"; // false
echo "Lebih kecil atau sama dengan: " . ($a <= $b) . "<br>"; // true

// Logika Operators
$a = true;
$b = false;

echo "Dan: " . ($a && $b) . "<br>"; // false
echo "Atau: " . ($a || $b) . "<br>"; // true
echo "Tidak: " . (!$a) . "<br>"; // false

?>