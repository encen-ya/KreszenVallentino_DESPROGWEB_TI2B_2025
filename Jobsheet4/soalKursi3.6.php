<?php
$total_kursi = 45;

$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;

$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Total kursi di restoran: " . $total_kursi . "<br>";
echo "Jumlah kursi yang terisi: " . $kursi_terisi . "<br>";
echo "Jumlah kursi yang kosong: " . $kursi_kosong . "<br>";
echo "Persentase kursi yang masih kosong: " . $persentase_kosong . "%";
?>