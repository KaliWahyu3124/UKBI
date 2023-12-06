<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_ukbi';
$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    echo "Gagal Connect: " . die(mysqli_error($koneksi));
}
?>