<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Ubah Data Siswa</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$ID_ADMIN = $_GET['ID_ADMIN'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?ID_ADMIN=<?php echo $ID_ADMIN; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nikadmin</td>
		<td><input type="text" name="NIK_ADMIN" value="<?php echo $data['NIK_ADMIN']; ?>"></td>
	</tr>
	<tr>
		<td>NAMA ADMIN</td>
		<td><input type="text" name="NAMAADMIN" value="<?php echo $data['NAMAADMIN']; ?>"></td>
	</tr>
	<tr>
		<td>JENIS KELAMIN</td>
		<td><input type="text" name="JENIS_KELAMIN" value="<?php echo $data['JENIS_KELAMIN']; ?>"></td>
	</tr>
	<tr>
		<td>USERNMAE</td>
		<td><input type="text" name="USERNAME" value="<?php echo $data['USERNAME']; ?>"></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td><input type="text" name="PASSWORD" value="<?php echo $data['PASSWORD']; ?>"></td>
	</tr>
	<tr>
		<td>LEBEL</td>
		<td><input type="text" name="LEVEL" value="<?php echo $data['LEVEL']; ?>"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="FOTO">
		</td>
	</tr>
	<tr>
		<td>STASTUS AKUN</td>
		<td><input type="text" name="STATUS_AKUN" value="<?php echo $data['STATUS_AKUN']; ?>"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
