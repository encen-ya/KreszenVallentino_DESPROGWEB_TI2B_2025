<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Pembagian: " . $sisaBagi . "<br>";
echo "Hasil Perpangkatan: " . $pangkat . "<br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo " a sama dengan b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo " a tidak sama dengan b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo " a lebih kecil dari b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo " a lebih besar dari b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo " a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo " a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil OR: " . ($hasilOr ? "true" : "false") . "<br>";
echo "Hasil NOT a: " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Hasil NOT b: " . ($hasilNotB ? "true" : "false") . "<br>";
echo "<br>";

$a += $b;
echo "Nilai a setelah +=: " . $a . "<br>";
$a = 10; 
$a -= $b;
echo "Nilai a setelah -=: " . $a . "<br>";
$a = 10;
$a *= $b;
echo "Nilai a setelah *=: " . $a . "<br>";
$a = 10;
$a /= $b;
echo "Nilai a setelah /=: " . $a . "<br>";
$a = 10;
$a %= $b;
echo "Nilai a setelah %=: " . $a . "<br>";
echo "<br>";


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";

?>