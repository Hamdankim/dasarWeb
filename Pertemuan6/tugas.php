<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="tugas.css">
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $("#klik").click(function() {
                $("#tabel").slideToggle("slow");
            });
        });
    </script>
</head>

<body>
    <h1>Data Siswa</h1>
    <div id="klik">Klik to show database</div>
    <div id="tabel">
    <table >
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php
        $dataSiswa = array(
            array("Andi", "15", "10A", "Malang"),
            array("Siti", "16", "10B", "Batu"),
            array("Budi", "15", "10A", "Dinoyo"),
            array("Anton", "25", "15A", "Dinoyo")
        );

        for ($i=0; $i < count($dataSiswa); $i++) {
            echo "<tr>";
            for ($j=0; $j < count($dataSiswa[$i]); $j++) { 
                echo "<td>". $dataSiswa[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <h2>
    <?php
    $nilaiRata = array_sum(array_column($dataSiswa, 1)) / count($dataSiswa);
    echo "Rata-rata Umur Siswa: " . ($nilaiRata) . " tahun";
    ?>
    </h2>
</div>
</body>

</html>