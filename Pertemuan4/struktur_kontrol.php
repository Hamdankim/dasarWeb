<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br><br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "<br><br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br><br>Total skor ujian: $totalSkor<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus)<br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus)<br>";
}

echo "<br><br>";
$nilaiUjian = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiUjian);
$totalNilai = 0;
for ($i = 2; $i < (count($nilaiUjian) - 2); $i++) {
    $totalNilai += $nilaiUjian[$i];
}
$rataRata = $totalNilai / (count($nilaiUjian) - 4);
echo "Total Nilai: $totalNilai<br><br>";
echo "Rata-rata Nilai: $rataRata<br><br>";

$harga = 120000;

if ($harga > 100000) {
    $diskon = 0.20;
    $potonganHarga = $harga * $diskon;
    $hargaSetelahDiskon = $harga - $potonganHarga;
    echo "Harga setelah diskon: $hargaSetelahDiskon<br><br>";
}
$skor = 600;
echo "Total skor pemain adalah: $skor";
$hadiah = ($skor >= 600) ? "YA" : "TIDAK";
echo "<br>Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK): $hadiah";

