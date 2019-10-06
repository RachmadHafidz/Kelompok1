<!DOCTYPE html>
<html>
<head>
	<title>Membuat Desain Form Login Dengan CSS - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<h1>S.I.D <br/>SI Desa Sabrang</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		
		<?php 
		if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>

		<form method="post" action="cek_login.php">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau Email">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="http://localhost/Kelompok1/arin/web/index.php">KEMBALI</a>
			</center>
		</form>
		
	</div>


</body>
</html>