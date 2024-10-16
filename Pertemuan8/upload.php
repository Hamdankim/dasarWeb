<?php
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES['file']['name']);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array('txt', 'pdf', 'doc', 'docx');
    $maxsize = 3 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES['file']['size'] <= $maxsize) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfile)) {
            echo "File berhasil diunggah";
            echo "<br>";
            echo '<img src="./uploads/download.jpeg" width="200">';
        } else {
            echo "Gagal menyimpan file";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimal";
    }
?>