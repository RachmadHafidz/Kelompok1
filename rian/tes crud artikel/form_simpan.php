<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Tambah Data Siswa</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>id</td>
		<td><input type="text" name="id"></td>
	</tr>
	<tr>
		<td>judul</td>
		<td><input type="text" name="judul"></td>
	</tr>
	
	<tr>
		<td>isi</td>
		<td><input type="text" name="isi"></td>
	</tr>
	
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
