<html>
<head>
	<title>PHP</title>
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	
	<tr>
		<th>id</th>
		<th>judul</th>
		<th>isi</th>
		
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM artikel1"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";

		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['judul']."</td>";
		echo "<td>".$data['isi']."</td>";
		
		echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	
</body>
</html>
