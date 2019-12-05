<html>
<head>
	<title>Simpan</title>
</head>
<body>
	<h1>Surat Domisili</h1>
	<form method="post" action="formsimpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>No surat</td>
		<td><input type="text" name="NO_SURATDOM"></td>
	</tr>
	<tr>
		<td>nik PENDUDUK</td>
		<td><input type="text" name="NIK_PENDUDUK"></td>
	</tr>
	<tr>
		<td>tanggal surat</td>
		<td><input type="date" name="TANGGAL_SURAT"></td>
	</tr>

	<tr>
		<td>nama pengaju</td>
		<td><input type="text" name="NAMA_PENGAJU"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin PENGAJU</td>
		<td>
		<input type="radio" name="JK_PENGAJU" value="Laki-laki"> Laki-laki
		<input type="radio" name="JK_PENGAJU" value="Perempuan"> Perempuan
		</td>
	</tr>

	<tr>
		<td>AGAMA pengaju</td>
		<td><input type="text" name="AGAMA_PENGAJU"></td>
	</tr>
	<tr>
		<td>NIK PENG</td>
		<td><input type="text" name="NIK_PENGAJU"></td>
	</tr>
    <tr>
		<td>TMP LAHIR</td>
        <td><input type="text" name="TMP_LAHIRPENGAJU"></td>
</tr>
    <tr>
		<td>TGL LAHIR PENGAJU</td>
        <td><input type="date" name="TGL_LAHIRPENGAJU"></td>
        </tr>
    <tr>
		<td>PEKERJAAN PENGAJU</td>
        <td><input type="text" name="PEKERJAANPENGAJU"></td>
        </tr>
    <tr>
		<td>ALAMAT PENG</td>
        <td><input type="text" name="ALAMATPENGAJU"></td>
        </tr>
    <tr>
		<td>TUJUAN</td>
        <td><input type="text" name="TUJUAN"></td>
        </tr>
    
	
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	
	</form>
</body>
</html>
