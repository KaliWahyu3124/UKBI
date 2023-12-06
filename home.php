<?php
session_start();
// Cek apakah session email sudah dibuat, jika tidak redirect ke halaman login
if (!isset($_SESSION['email'])) {
 header("Location: login.php");
 exit();
}
// Jika sudah login, tampilkan halaman dashboard
echo "Selamat datang " . $_SESSION['email'] . "!";
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Halaman Utama</title>
</head>
<body>
 <a href="logout.php"> <h3>Keluar</h3></a>
</body>
</html>