<?php
// Perulangan while
/*
$i = 1;
while ($i < 5) {
    echo $i . "<br>";
    $i = $i + 1;
}
*/

// Perulangan for
/*
for ($i = 1; $i < 5; $i++) {
    echo $i . "<br>";
}
*/

// Deklarasi array
$makanan = array("bakso", "nasi goreng", "mie goreng", "sate");

// Perulangan foreach
foreach ($makanan as $value) {
    echo "$value <br>";
}

// Menampilkan isi array dengan for
for ($i = 0; $i < 3; $i++) {
    echo $makanan[$i] . "<br>";
}
?>