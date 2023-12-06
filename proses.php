<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
// Cek apakah email dan password telah diisi
if(empty($email) || empty($password)) {
 header("Location: login.php?error=emptyfields");
 exit();
}

// Kueri untuk memeriksa email dan password di tabel admin
$adminQuery = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' AND password='$password'");
// Kueri untuk memeriksa email dan password di tabel peserta
$pesertaQuery = mysqli_query($koneksi, "SELECT * FROM peserta WHERE email='$email' AND password='$password'");

// Cek apakah kueri admin menghasilkan satu baris data
if (mysqli_num_rows($adminQuery) > 0) {
 $row = mysqli_fetch_array($adminQuery);
 // Jika berhasil, buat session dan redirect ke halaman admin
 $_SESSION['email'] = $row['email'];
 header("Location: admin.php");
 exit();
} 
// Cek apakah kueri peserta menghasilkan satu baris data
elseif (mysqli_num_rows($pesertaQuery) > 0) {
 $row = mysqli_fetch_array($pesertaQuery);
 // Jika berhasil, buat session dan redirect ke halaman peserta
 $_SESSION['email'] = $row['email'];
 header("Location: peserta.php");
 exit();
} else {
 // Jika gagal, redirect ke halaman login dengan pesan error
 header("Location: login.php?error=invalidlogin");
 exit();
}
$koneksi->close();
?>
