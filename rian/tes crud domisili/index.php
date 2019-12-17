<html>
<head>
	<title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>Foto</th>
		<th>NIS</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Telepon</th>
		<th>Alamat</th>
		<th>Alamat</th>
		<th>Alamat</th>
		<th>Alamat</th>
		<th>Alamat</th>
		<th>Alamat</th>
		<th>Alamat</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM sp_domisili"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		
		echo "<td>".$data['NO_SURATDOM']."</td>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
		echo "<td>".$data['TANGGAL_SURAT']."</td>";
		echo "<td>".$data['NAMA_PENGAJU']."</td>";
		echo "<td>".$data['JK_PENGAJU']."</td>";
		echo "<td>".$data['AGAMA_PENGAJU']."</td>";
		echo "<td>".$data['NIK_PENGAJU']."</td>";
		echo "<td>".$data['TMP_LAHIRPENGAJU']."</td>";
		echo "<td>".$data['TGL_LAHIRPENGAJU']."</td>";
		echo "<td>".$data['PEKERJAANPENGAJU']."</td>";
		echo "<td>".$data['ALAMATPENGAJU']."</td>";
		echo "<td>".$data['TUJUAN']."</td>";
		echo "<td><a href='form_ubah.php?NO_SURATDOM=".$data['NO_SURATDOM']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?NO_SURATDOM=".$data['NO_SURATDOM']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
