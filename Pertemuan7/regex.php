<?php
$patern = '/[a-z]/';
$text = 'This is a Sample text';

if (preg_match($patern, $text)) {
    echo "Huruf kecil ditemukan";
} else {
    echo "Huruf kecil tidak ditemukan";
}
echo "<br>";
$patern = '/[0-9]+/';
$text = 'There are 123 apples';
if (preg_match($patern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok";
}
echo "<br>";
$patern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie';
$new_text = preg_replace($patern, $replacement, $text);
echo $new_text;