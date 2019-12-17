<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Tambah Data Siswa</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>No surat domisili</td>
		<td><input type="text" name="NO_SURATDOM"></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td><input type="hidden" name="NIK_PENDUDUK"></td>
	</tr>
	<tr>
		<td>TANGGAL SURAT</td>
		<td><input type="text" name="TANGGAL_SURAT"></td>
	</tr>
	<tr>
		<td>NAMA PENGAJU</td>
		<td><input type="text" name="NAMA_PENGAJU"></td>
	</tr>
	<tr>
		<td>JK_PENGAJU</td>
		<td><input type="text" name="JK_PENGAJU"></td>
	</tr>
	<tr>
		<td>AGAMA</td>
		<td><input type="text" name="AGAMA_PENGAJU"></td>
	</tr>
	<tr>
		<td>NIK PENGAJU</td>
		<td><input type="text" name="NIK_PENGAJU"></td>
	</tr>
	<tr>
		<td>TMP LAHIR PENGAJU</td>
		<td><input type="text" name="TMP_LAHIRPENGAJU"></td>
	</tr>
	<tr>
		<td>TGL LAHIR PENGAJU</td>
		<td><input type="date" name="TGL_LAHIRPENGAJU"></td>
	</tr>
	<tr>
		<td>pekerjaan pengaju</td>
		<td><input type="text" name="PEKERJAANPENGAJU"></td>
	</tr>
	<tr>
		<td>ALAMAT</td>
		<td><input type="text" name="ALAMATPENGAJU"></td>
	</tr>
	<tr>
		<td>TUJUAN</td>
		<td><input type="text" name="TUJUAN"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
