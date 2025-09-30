<?php
$hargaAsli = 120000;
$batasDiskon = 100000;
$persenDiskon = 20;

if ($hargaAsli > $batasDiskon) {
    $jumlahDiskon = $hargaAsli * $persenDiskon / 100;
    $hargaSetelahDiskon = $hargaAsli - $jumlahDiskon;
} else {
    $hargaSetelahDiskon = $hargaAsli;
}

echo "Harga asli: Rp " . $hargaAsli;
echo "<br>Diskon: Rp " . $jumlahDiskon;
echo "<br>Harga yang harus dibayar: Rp " . $hargaSetelahDiskon;
?>