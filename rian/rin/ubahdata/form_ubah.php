<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data </h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIk yang dikirim oleh index.php melalui URL
	$NIK = $_GET['NIK'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM warga WHERE NIK='".$NIK."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?NIK=<?php echo $NIK; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
    
    <tr>
		<td>No KK</td>
		<td><input type="text" name="NO_KK" value="<?php echo $data['NO_KK']; ?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="NAMA" value="<?php echo $data['NAMA']; ?>"></td>
	</tr>
	
	<tr>
        <td>Jenis Kelamin</td>
        <td><input type="text" name="JENIS_KELAMIN" value="<?php echo $data['JENIS_KELAMIN']; ?>"></td>

    </tr>
    <tr>
		<td>Tempat Lahir</td>
		<td><input type="text" name="TMP_LHR" value="<?php echo $data['TMP_LHR']; ?>"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="text" name="TGL_LHR" value="<?php echo $data['TGL_LHR']; ?>"></td>
    </tr>
    <tr>
		<td>Agama</td>
		<td><input type="text" name="AGAMA" value="<?php echo $data['AGAMA']; ?>"></td>
    </tr>
    <tr>
		<td>Pendidikan</td>
		<td><input type="text" name="PENDIDIKAN" value="<?php echo $data['PENDIDIKAN']; ?>"></td>
    </tr>
    <tr>
		<td>Pekerjaan</td>
		<td><input type="text" name="PEKERJAAN" value="<?php echo $data['PEKERJAAN']; ?>"></td>
    </tr>
    <tr>
		<td>Alamat</td>
		<td><input type="text" name="ALAMAT" value="<?php echo $data['ALAMAT']; ?>"></td>
    </tr>
    <tr>
		<td>RT/RW</td>
		<td><input type="text" name="RWRT" value="<?php echo $data['RWRT']; ?>"></td>
    </tr>
    <tr>
		<td>Desa</td>
		<td><input type="text" name="DESA" value="<?php echo $data['DESA']; ?>"></td>
    </tr>
    <tr>
		<td>Kecamatan</td>
		<td><input type="text" name="KECAMATAN" value="<?php echo $data['KECAMATAN']; ?>"></td>
    </tr>
    <tr>
		<td>Kabupaten</td>
		<td><input type="text" name="KAB_KOTA" value="<?php echo $data['KAB_KOTA']; ?>"></td>
    </tr>
    <tr>
		<td>Kode Pos</td>
		<td><input type="text" name="KODE_POS" value="<?php echo $data['KODE_POS']; ?>"></td>
    </tr>
    <tr>
		<td>Provinsi</td>
		<td><input type="text" name="PROVINSI" value="<?php echo $data['PROVINSI']; ?>"></td>
    </tr>
    <tr>
		<td>Kewarganegaraan</td>
		<td><input type="text" name="KEWARGANEGARAAN" value="<?php echo $data['KEWARGANEGARAAN']; ?>"></td>
    </tr>
    <tr>
		<td>Username</td>
		<td><input type="text" name="USERNAME" value="<?php echo $data['USERNAME']; ?>"></td>
    </tr>
    <tr>
		<td>Password</td>
		<td><input type="text" name="PASSWORD" value="<?php echo $data['PASSWORD']; ?>"></td>
    </tr>
    <tr>
		<td>Tanggal Daftar</td>
		<td><input type="text" name="TGL_DAFTAR" value="<?php echo $data['TGL_DAFTAR']; ?>"></td>
    </tr>
    <tr>
		<td>Level</td>
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
		<td>Status</td>
		<td><input type="text" name="STATUS" value="<?php echo $data['STATUS']; ?>"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="http://localhost/Kelompok1/rian/rin/home/dtwarga.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
