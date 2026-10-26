<?php
    $pesan = "Selamat belajar";
    echo "Selamat datang " . $pesan . "<br>";

    $cars = array("Volvo", "BMW", "Toyota");
    echo $cars[0] . "<br>";

    $x = 10;
    $y = 5;

    $x = $x + $y;
    echo "Hasil penjumlahan: " . $x . "<br>";

    $x += $y;
    echo "Hasil += : " . $x . "<br>";

    $teks1 = "PHP";
    $teks2 = "Belajar";
    $teks1 = $teks1 . " " . $teks2;
    echo $teks1 . "<br>";

    $teks1 .= "!";
    echo $teks1 . "<br>";

    $x++;
    echo "Hasil increment: " . $x . "<br>";
?>