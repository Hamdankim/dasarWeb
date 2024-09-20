<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan $a dan $b adalah $hasilTambah.<br>";
echo "Hasil pengurangan $a dan $b adalah $hasilKurang.<br>";
echo "Hasil perkalian $a dan $b adalah $hasilKali.<br>";
echo "Hasil pembagian $a dan $b adalah $hasilBagi.<br>";
echo "Hasil sisa bagi $a dan $b adalah $sisaBagi.<br>";
echo "Hasil pangkat $a dan $b adalah $pangkat.<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>Hasil == $a dan $b adalah $hasilSama.<br>";
echo "Hasil != $a dan $b adalah $hasilTidakSama.<br>";
echo "Hasil < $a dan $b adalah $hasilLebihKecil.<br>";
echo "Hasil > $a dan $b adalah $hasilLebihBesar.<br>";
echo "Hasil <= $a dan $b adalah $hasilLebihKecilSama.<br>";
echo "Hasil >= $a dan $b adalah $hasilLebihBesarSama.<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>Hasil && $a dan $b adalah $hasilAnd.<br>";
echo "Hasil || $a dan $b adalah $hasilOr.<br>";
echo "Hasil !a $a dan $b adalah $hasilNotA.<br>";
echo "Hasil !b $a dan $b adalah $hasilNotB.<br>";

$a += $b;
echo "<br>Hasil += adalah $a.<br>";
$a -= $b;
echo "Hasil -= adalah $a.<br>";
$a *= $b;
echo "Hasil *= adalah $a.<br>";
$a /= $b;
echo "Hasil /= adalah $a.<br>";
$a %= $b;
echo "Hasil %= adalah $a.<br>";

$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
echo "<br>Hasil === $a dan $b adalah $hasilIdentik.<br>";
$hasilTidakIdentik = $a !== $b;
echo "Hasil !== $a dan $b adalah $hasilTidakIdentik.<br>";

$kursiTersedia = 45;
$kursiDitempati = 28;
$kursiKosong = $kursiTersedia - $kursiDitempati;
echo "<br>Kursi Tersedia = $kursiTersedia<br>";
echo "Kursi Ditempati = $kursiDitempati<br>";
echo "Kursi Kosong = $kursiKosong<br>";
$persen = ($kursiKosong / $kursiTersedia) * 100;
echo "Persen Kursi Kosong = $persen %";
?>