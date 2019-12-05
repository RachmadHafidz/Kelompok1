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
	$NO_KK = $_GET['NO_KK'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM keluarga WHERE NO_KK='".$NO_KK."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?NO_KK=<?php echo $NO_KK; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>ID ADMN</td>
		<td><input type="text" name="ID_ADMIN" value="<?php echo $data['ID_ADMIN']; ?>"></td>
	</tr>
	<tr>
		<td>TGL DIBUAT</td>
		<td><input type="date" name="TGL_DIBUAT" value="<?php echo $data['TGL_DIBUAT']; ?>"></td>
	</tr>
	<tr>
		<td>KEPALA KELUARGA</td>
		<td><input type="text" name="KEPALA_KELUARGA" value="<?php echo $data['KEPALA_KELUARGA']; ?>"></td>
	</tr>
	<tr>
		<td>ALAMAT KELURGA</td>
		<td><input type="text" name="ALAMAT_KELURGA" value="<?php echo $data['ALAMAT_KELURGA']; ?>"></td>
	</tr>
	<tr>
		<td>RT RW</td>
		<td><input type="text" name="RRT_RW" value="<?php echo $data['RRT_RW']; ?>"></td>
	</tr>
	<tr>
		<td>DESA</td>
		<td><input type="text" name="DESA" value="<?php echo $data['DESA']; ?>"></td>
	</tr>
	<tr>
		<td>KEC</td>
		<td><input type="text" name="KEC" value="<?php echo $data['KEC']; ?>"></td>
	</tr>
	<tr>
		<td>KABUPATEn</td>
		<td><input type="text" name="KAB_KOTA" value="<?php echo $data['KAB_KOTA']; ?>"></td>
	</tr>
	<tr>
		<td>KODE POS</td>
		<td><input type="text" name="KODE_POS" value="<?php echo $data['KODE_POS']; ?>"></td>
	</tr>
	<tr>
		<td>PROVIBSKI</td>
		<td><input type="text" name="PROVINSI" value="<?php echo $data['PROVINSI']; ?>"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
