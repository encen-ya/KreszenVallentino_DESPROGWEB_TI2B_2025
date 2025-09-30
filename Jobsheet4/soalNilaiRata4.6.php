<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$totalNilai = 0;
for ($i = 2; $i < 8; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

$rataRata = $totalNilai / 6;

echo "Nilai rata-rata: " . $rataRata;
?>