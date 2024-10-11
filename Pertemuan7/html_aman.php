<?php
$input = $_POST['input'];
echo $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
echo "<br>";
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email yang dimasukkan: " . $email;
} else {
    echo "Email yang dimasukkan tidak valid";
}
