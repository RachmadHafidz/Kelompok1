<html>
<head>
	<title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
	<h1>Data Warga</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>NIK</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>RT/RW</th>
        <th>Desa</th>
        <th>Kecamatan</th>
        <th>Agama</th>
        <th>Status</th>
        <th>Pekerjaan</th>
        <th>Kewarganegaraan</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM warga"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NIK']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['jeniskelamin']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['rt/rw']."</td>";
        echo "<td>".$data['desa']."</td>";
        echo "<td>".$data['kecamatan']."</td>";
        echo "<td>".$data['agama']."</td>";
        echo "<td>".$data['status']."</td>";
        echo "<td>".$data['pekerjaan']."</td>";
        echo "<td>".$data['kewarganegaraan']."</td>";
		echo "<td><a href='form_ubah.php?NIK=".$data['NIK']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?NIK=".$data['NIK']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
	<a href="http://localhost/Kelompok1/S.I.D/nyoba2.php">Kembali</a>
</body>
</html>
