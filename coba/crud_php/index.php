<html>
<head>
	<title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
	<h1>Data Santri</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>Foto</th>
		<th>NIS</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Status Pekerjaan</th>
		<th>Tempat Kerja</th>
		<th>No Kamar</th>
		<th>Nama Orang Tua</th>
		<th>Pekerjaan Orang Tua</th>
		<th>Alamat Rumah</th>
		<th>Mulai Menetap</th>
		<th>Keluar Pondok</th>
		<th>No Telepon</th>
		<th>Status Hunian</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM data_santri"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['nis']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['tanggal_lahir']."</td>";
		echo "<td>".$data['status_pekerjaan']."</td>";
		echo "<td>".$data['no_kamar']."</td>";
		echo "<td>".$data['nama_ortu']."</td>";
		echo "<td>".$data['pekerjaan_ortu']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td>".$data['no_telepon']."</td>";
		echo "<td>".$data['mulai_menetap']."</td>";
		echo "<td>".$data['keluar_pondok']."</td>";
		echo "<td>".$data['status_hunian']."</td>";
		echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
