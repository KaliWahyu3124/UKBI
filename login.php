<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="box">
		<div class="container">
			<form action="proses.php" method="post">
				<h1>Masuk</h1>
				<hr>
				<center>
				<h3>WEB UJI KEMAHIRAN BAHASA INDONESIA</h3>
				</center>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" class="form-control" id="email" placeholder="Enter email" name="email"></div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="Enter password" name="password"></div>
				<button type="submit" class="btn btn-primary">Login</button>
				<p><a href="daftar.php">Daftar</a></p>
		</form>
		</div>
	</div>
</body>
</html>
