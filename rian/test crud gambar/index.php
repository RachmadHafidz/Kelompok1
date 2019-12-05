<html>
<head>
	<title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
	<th>foto</th>
		<th>id admin</th>
		<th>nikadmin</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>usernmane</th>
		<th>password</th>
		<th>level</th>
		<th>status akun</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM admin"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='images/".$data['FOTO']."' width='100' height='100'></td>";
		echo "<td>".$data['ID_ADMIN']."</td>";
		echo "<td>".$data['NIKADMIN']."</td>";
		echo "<td>".$data['NAMAADMIN']."</td>";
		echo "<td>".$data['JENIS_KELAMIN']."</td>";
		echo "<td>".$data['USERNAME']."</td>";
		echo "<td>".$data['PASSWORD']."</td>";
		echo "<td>".$data['LEVEL']."</td>";
		echo "<td>".$data['STATUS_AKUN']."</td>";
		echo "<td><a href='form_ubah.php?ID_ADMIN=".$data['ID_ADMIN']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?ID_ADMIN=".$data['ID_ADMIN']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
