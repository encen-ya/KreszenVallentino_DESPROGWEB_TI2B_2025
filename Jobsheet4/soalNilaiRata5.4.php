<?php
$siswa = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
];

$totalNilai = array_sum($siswa);
$jumlahSiswa = count($siswa);
$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata kelas: " . $rataRata . "<br><br>";
echo "Siswa yang mencapai nilai di atas rata-rata:<br>";

foreach ($siswa as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo $nama . ": " . $nilai . "<br>";
    }
}
?>