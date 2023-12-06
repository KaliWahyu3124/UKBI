<html>
<head>
<title>DAFTAR</title>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: darkblue;">
    <a class="navbar-brand">Web Online Uji Kemahiran <br> Bahasa Indonesia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" style="font-size: 18px;">
                        <a class="nav-item nav-link active" href="login.php">Kembali</a>
    </nav>
    <div class="box">
            <form action="process_registration.php" method="post">
                <div class="label">Nama:<br>
                <input type="text" placeholder="example: Upin" required oninvalid="this.setCustomValidity('ANDA BELUM MENGISI NAMA')" oninput="this.setCustomValidity('')"><br>
                <div class="label">Email:<br>
                <input type="text" placeholder="example@gmail.com" required oninvalid="this.setCustomValidity('ANDA BELUM MENGISI EMAIL')" oninput="this.setCustomValidity('')"><br>
                <div class="label">Password:<br>
                <input type="text" placeholder="password" required oninvalid="this.setCustomValidity('ANDA BELUM MENGISI PASSWORD')" oninput="this.setCustomValidity('')"><br>
                <div class="label">Tempat tanggal lahir:<br>
                <input type="text" placeholder="tempat lahir" required oninvalid="this.setCustomValidity('ANDA BELUM MENGISI TEMPAT LAHIR')" oninput="this.setCustomValidity('')"><br>
                <input type="date" required oninvalid="this.setCustomValidity('ANDA BELUM MENGISI TANGGAL LAHIR')" oninput="this.setCustomValidity('')"><br>
                        <br>
                <div class="label">Jenis Kelamin:<br>
                        <br>
                <input type="radio" name="Jenis Kelamin" value="Pria" checked>Laki-laki<br>
                        <br>
                <input type="radio" name="Jenis Kelamin" value="Wanita">Perempuan<br>
                        <br>
                <div class="label">Jurusan:<br>
                <select name="jurusan">
                    <option value="teknik informatika">Teknik Informatika
                    <option value="teknik mesin">Teknik Mesin
                    <option value="teknik elektro">Teknik Elektro
                    <option value="manajemen bisnis">Manajemen Bisnis
                    </select><br>
                <div class="label">Jenjang:<br>
                <select name="jenjang">
                    <option value="d1">D1
                    <option value="d2">D2
                    <option value="d3">D3
                    <option value="s1">S1
                    <option value="s2">S2
                    <option value="s3">S3
                    </select><br>
                <button type="submit">Submit</button></form>
    </div>
</body>
</html> 