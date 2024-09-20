<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $value) {
    if ($value >= 70) {
        $nilaiLulus[] = $value;
    }
}

echo "Daftar nilai yang lulus: " . implode(", ", $nilaiLulus) . "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 5],
    ['Charlie', 8],
    ['David', 6],
    ['Eva', 9],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan yang memiliki pengalaman lebih dari 5 tahun: " . implode(", ", $karyawanPengalamanLimaTahun) . "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo $nilai[0] . ": " . $nilai[1] . "<br>";
}

$nilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

echo "<br><br>Daftar nilai mahasiswa: <br>";
foreach ($nilai as $data) {
    echo $data[0] . ": " . $data[1] . "<br>";
}

$nilaiRata = array_sum(array_column($nilai, 1)) / count($nilai);
echo "<br>Nilai rata-rata: " . $nilaiRata;

echo "<br>Nilai mahasiswa yang lulus: <br>";
foreach ($nilai as $data) {
    if ($data[1] >= 70) {
        echo $data[0] . "<br>";
    }
}
?>