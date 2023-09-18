<?php
// Variabel
$r = 5; // Jari-jari kerucut
$h = 10; // Tinggi kerucut

// Menghitung luas alas
$luasAlas = M_PI * $r * $r;

// Menghitung garis pelukis (a)
$a = sqrt($r * $r + $h * $h);

// Menghitung luas permukaan
$luasPermukaan = $r * $r + M_PI * $r * $a;

// Menampilkan hasil
echo "Jari-jari kerucut (r) = " . $r . "<br>";
echo "Tinggi kerucut (h) = " . $h . "<br>";
echo "Luas alas kerucut = " . $luasAlas . "<br>";
echo "Luas permukaan kerucut = " . $luasPermukaan . "<br>";
?>
