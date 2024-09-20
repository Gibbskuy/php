<?php
// for 
echo "<h3>Contoh for Loop:</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Bola ke-$i<br>";
}

// while
echo "<h3>Contoh while Loop:</h3>";
$i = 1;
while ($i < 9) {
    echo "Bola ke-$i<br>";
    $i++;
}

// do while
echo "<h3>Contoh do-while Loop:</h3>";
$i = 1;
do {
    echo "Bola ke-$i<br>";
    $i++;
} while ($i <= 5);

// foreach
echo "<h3>Contoh foreach Loop:</h3>";
$buah = ["Apel", "Pisang", "Jeruk"];

foreach ($buah as $item) {
    echo "Buah: $item<br>";
}

?>