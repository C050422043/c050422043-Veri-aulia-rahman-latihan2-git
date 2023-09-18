<?php

$saldoAwal = 2000000; // Saldo awal Rp. 2.000.000,-
$bunga = 0.03; // Bunga 3% per bulan
$bulan = 11;

// Menghitung saldo akhir
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

echo "Saldo akhir setelah ".$bulan." bulan adalah: Rp. " . number_format($saldoAkhir, 0, ',', '.') . ",-";

?>
