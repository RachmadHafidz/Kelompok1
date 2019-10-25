<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data Perangakt Desa</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIk yang dikirim oleh index.php melalui URL
	$NIK = $_GET['NIK'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM p_desa WHERE NIK='".$NIK."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?nis=<?php echo $nis; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
	</tr>
	
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
    </tr>
    <tr>
		<td>Jabatan</td>
		<td><input type="text" name="jabatan" value="<?php echo $data['telp']; ?>"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="foto">
		</td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="http://localhost/Kelompok1/rian/rin/home/dtpenduduk.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
