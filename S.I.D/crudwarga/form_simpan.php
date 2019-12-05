<html>
<head>
	<title>Simpan</title>
</head>
<body>
	<h1>Tambah Data Siswa</h1>
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
		<td>Jenis Kelamin</td>
		<td>
		<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
		<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
    <tr>
		<td>RT/RW</td>
        <td><input type="text" name="rt/rw"></td>
</tr>
    <tr>
		<td>Desa</td>
        <td><input type="text" name="desa"></td>
        </tr>
    <tr>
		<td>Kecamatan</td>
        <td><input type="text" name="kecamatan"></td>
        </tr>
    <tr>
		<td>Agama</td>
        <td><input type="text" name="agama"></td>
        </tr>
    <tr>
		<td>Status</td>
        <td><input type="text" name="status"></td>
        </tr>
    <tr>
		<td>Pekerjaan</td>
        <td><input type="text" name="pekerjaan"></td>
        </tr>
    <tr>
		<td>Kewarganegaraan</td>
		<td><input type="text" name="kewarganegaraan"></td>
	</tr>
	
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
