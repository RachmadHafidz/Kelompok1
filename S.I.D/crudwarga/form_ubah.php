<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data Warga</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$NIK = $_GET['NIK'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM warga WHERE NIK='".$NIK."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?NIK=<?php echo $NIK; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>
		<?php
		if($data['jeniskelamin'] == "Laki-laki"){
			echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
			echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
		}else{
			echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
			echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
		}
		?>
		</td>
	</tr>
	
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
	</tr>
	<tr>
		<td>RT/RW</td>
		<td><input type="text" name="rt/rw" value="<?php echo $data['rt/rw']; ?>"></td>
    </tr>
    <tr>
		<td>Desa</td>
		<td><input type="text" name="desa" value="<?php echo $data['desa']; ?>"></td>
    </tr>
    <tr>
		<td>Kecamatan</td>
		<td><input type="text" name="kecamatan" value="<?php echo $data['kecamatan']; ?>"></td>
    </tr>
    <tr>
		<td>Agama</td>
		<td><input type="text" name="agama" value="<?php echo $data['agama']; ?>"></td>
    </tr>
    <tr>
		<td>Status</td>
        <td><input type="text" name="status" value="<?php echo $data['status']; ?>"></td>
    </tr>
    <tr>
		<td>Pekerjaan</td>
		<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>"></td>
    </tr>
    <tr>
		<td>Kewarganegaraan</td>
		<td><input type="text" name="kewarganegaraan" value="<?php echo $data['kewarganegaraan']; ?>"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
