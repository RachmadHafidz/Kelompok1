<html>
<head>
	<title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>No kk</th>
		<th>Id admin</th>
		<th>tgl buat</th>
		<th>kepala keluarga</th>
		<th>alamat</th>
		<th>rt rw</th>
		<th>desa</th>
		<th>kecamatan</th>
		<th>kabupaten</th>
		<th>kodepos</th>
		<th>provinsi</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM keluarga"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NO_KK']."</td>";
		echo "<td>".$data['ID_ADMIN']."</td>";
		echo "<td>".$data['TGL_DIBUAT']."</td>";
		echo "<td>".$data['KEPALA_KELUARGA']."</td>";
		echo "<td>".$data['ALAMAT_KELURGA']."</td>";
		echo "<td>".$data['RRT_RW']."</td>";
		echo "<td>".$data['DESA']."</td>";
		echo "<td>".$data['KEC']."</td>";
		echo "<td>".$data['KAB_KOTA']."</td>";
		echo "<td>".$data['KODE_POS']."</td>";
		echo "<td>".$data['PROVINSI']."</td>";
		echo "<td><a href='form_ubah.php?NO_KK=".$data['NO_KK']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?NO_KK=".$data['NO_KK']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
