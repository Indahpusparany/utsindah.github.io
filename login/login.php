<!DOCTYPE html>
<html>

<head>
	<title>Halaman Log-In Asrama</title>

	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="js/bootstrap.min.js"></script>
	<script src="jquery/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="main.js"></script>
	<link rel="icon" href="../imgs/logo_aisyiyah.png" type="image/png" sizes="16x16">
	<!------ Include the above in your HEAD tag ---------->
</head>

<body>
	<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Sudah Menjadi Anggota...?</h2>
			<p>Silahkan Log-In.</p>
			<label id="label-register" for="log-reg-show">Log In</label>
			<input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
		</div>

		<div class="register-info-box">
			<h2>Ingin Menjadi Anggota Asrama...?</h2>
			<p>Silahkan lakukan pendaftaran.</p>
			<a href="../anggota/register/register.php" type="button" class="btn btn-warning">DAFTAR</a>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>

		<div class="white-panel">
			<div class="login-show">
				<h2>LOG IN</h2>
				<form action="proses_login.php" method="POST">
					<input type="text" placeholder="Username" name="username" required>
					<input type="password" placeholder="Password" name="pass" required>
					<input type="submit" value="Login" class="btn btn-success">
					<input type="reset" value="Reset" class="btn btn-secondary">
				</form>
				<br><br>
				<a href="login_admin.php" class="btn btn-round btn-danger">Login Admin</a>
				<a href="../index.php" class="btn btn-round btn-primary btn-md" onclick="self.close()">Kembali ke Hal. Utama</a>
			</div>
		</div>
	</div>
</body>

</html>