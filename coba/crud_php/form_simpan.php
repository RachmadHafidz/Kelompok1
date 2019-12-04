<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Tambah Data Santri</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>NIS</td>
		<td><input type="text" name="nis"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="date" name="tanggal_lahir"></td>
	</tr>
	<tr>
		<td>Status Pekerjaan</td>
		<td><input type="text" name="status_pekerjaan"></td>
	</tr>
	<tr>
		<td>Tempat kerja</td>
		<td><input type="text" name="tempat_kerja"></td>
	</tr>
	<tr>
		<td>No Kamar</td>
		<td><input type="text" name="no_kamar"></td>
	</tr>
	<tr>
		<td>Nama Orang Tua</td>
		<td><input type="text" name="nama_ortu"></td>
	</tr>
	<tr>
		<td>Pekerjaan Orang Tua</td>
		<td><input type="text" name="pekerjaan_ortu"></td>>
	</tr>
	<tr>
		<td>Alamat Rumah</td>
		<td><textarea name="alamat_rumah"></textarea></td>
	</tr>
	<tr>
		<td>Mulai Menetap</td>
		<td><input type="date" name="mulai_menetap"></td>
	</tr>
	<tr>
		<td>Keluar Pondok</td>
		<td><input type="date" name="keluar_pondok"></td>
	</tr>
	<tr>
		<td>No Telepon</td>
		<td><input type="text" name="no_telepon"></td>
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
