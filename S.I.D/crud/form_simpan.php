<html>
<head>
	<title>Simpan Data</title>
</head>
<body>
	<h1>Tambah Data Perangkat Desa</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>NIK</td>
		<td><input type="text" name="NIK"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
    </tr>
    
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"></textarea></td>
    </tr>
    <tr>
		<td>Jabatan</td>
		<td><input type="text" name="jabatan"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
