<?php
$poinPemain = 650;

echo "Total skor pemain adalah: " . $poinPemain;
echo "<br>Apakah pemain mendapatkan hadiah tambahan? " . ($poinPemain > 500 ? "YA" : "TIDAK");
?>