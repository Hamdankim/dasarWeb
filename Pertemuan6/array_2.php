<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
    echo "<table border='1'>";
    echo "<tr><td>Nama : {$Dosen['nama']}</td></tr>";
    echo "<tr><td>Domisili : {$Dosen['domisili']}</td></tr>";
    echo "<tr><td>Jenis Kelamin : {$Dosen['jenis_kelamin']}</td></tr>";
    echo "</table>";
    ?>
</body>

</html>