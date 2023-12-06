<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Data Admin</title>
</head>
<body>
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: darkblue;">
					<a class="navbar-brand">Web Online Uji Kemahiran <br> Bahasa Indonesia</a>
				</nav>
		</div>
		<div class="row">
			<div class="col-2">
				<div class="sidebar" style="background-color: lightgrey; height: 100vh; width: 160px; box-sizing: border-box;">
					<div class="font-weight-normal text-center pt-4" style="font-size: 20px;">Admin</div>
						<div class="font-weight-bold mt-4 ml-3" style="font-size: 20px;">Beranda</div>
							<a href="#" class="font-weight-normal ml-4 d-inline-block pt-4" style="font-size: 15px; color: black;">Data Admin</a>
							<a href="#" class="font-weight-normal ml-4 d-inline-block pt-4" style="font-size: 15px; color: black;">Data Pengguna</a>
							<a href="#" class="font-weight-normal ml-4 d-inline-block pt-4" style="font-size: 15px; color: black;">Kelola Soal Tes</a>
							<a href="#" class="font-weight-normal ml-4 d-inline-block pt-4" style="font-size: 15px; color: black;">Kelola Peserta Tes</a>
							<a href="#" class="font-weight-normal ml-4 d-inline-block pt-4" style="font-size: 15px; color: black;">Hasil Ujian</a>
							<a href="Home.html" class="font-weight-normal ml-4 d-inline-block pt-5" style="color: black;">Keluar</a>
				</div>
			</div>
			<div class="col-8 offset-1 py-5">
				<div style="height: 500px; width: 950px; background-color: darkblue;">
					<div class="text-center font-weight-bolder py-4" style="font-size: 20px; color: white;">
						Data Admin
					</div>
						<button type="button" class="btn btn-light mx-5" style="background-color" data-toggle="modal" data-target="#coba">+Tambah</button>
						<div class="modal fade" id="coba" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
	      						<form method="post">
									<div class="form-group">
									<label for="nama">Nama:</label>
									<input type="text" class="form-control" id="nama">
									</div>
									<div class="form-group">
									<label for="username">Username:</label>
									<input type="text" class="form-control" id="username">
									</div>
									<div class="form-group">
									<label for="password">Password:</label>
									<input type="text" class="form-control" id="password">
									</div>
									<div class="form-group">
									<label for="Email">Email:</label>
									<input type="text" class="form-control" id="email">
									</div>
									<div class="form-group">
									<label for="role">Role:</label>
									<select name="role">
									<option value="Admin">Admin
									<option value="Peserta">Peserta
									</select>
									</div>
								</form>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
							        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
							      </div>
							    </div>
							  </div>
							</div>
					<table class="mx-5 my-3 text-center" border="1" style="background-color: white; width: 850px; height: 320px;">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Password</th>
							<th>Email</th>
							<th>Role</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Andi Saputra</td>
							<td>Andi_12</td>
							<td>1123123</td>
							<td>andisaputra@gmail.com</td>
							<td>Admin</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Budi Budiman</td>
							<td>Budi_12</td>
							<td>109203</td>
							<td>budibudiman@gmail.com</td>
							<td>Admin</td>
						</tr>
						<tr>
							<td>3</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>4</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>5</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>6</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
		</div>
		</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>