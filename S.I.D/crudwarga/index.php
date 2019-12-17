<html>
<head>
	<title>Penduduk</title>
</head>
<body>
	<h1>Data Warga</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
	<th>NIK</th>
		<th>ID admin</th>
		<th>No KK</th>
        <th>Tanggal Daftar</th>
        <th>Nama Penduduk</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Status</th>
        <th>Pekerjaan</th>
		<th>Pendidikan</th>
		<th>Kewarganegaraan</th>
		<th>Status</th>
		<th>Keterangan Hidup</th>
		<th>Username</th>
		<th>Password</th>
		<th>No Telepon</th>
		<th>Email</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM penduduk"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
		echo "<td>".$data['ID_ADMIN']."</td>";
		echo "<td>".$data['NO_KK']."</td>";
        echo "<td>".$data['TGLDAFTAR']."</td>";
        echo "<td>".$data['NAMAPEN']."</td>";
        echo "<td>".$data['TEMPATLHR']."</td>";
        echo "<td>".$data['TANGGALHR']."</td>";
        echo "<td>".$data['JK_PEN']."</td>";
        echo "<td>".$data['AGAMAPEN']."</td>";
        echo "<td>".$data['STATUSPEN']."</td>";
		echo "<td>".$data['PEKERJAANPEN']."</td>";
		echo "<td>".$data['PENDIDIKANPEN']."</td>";
		echo "<td>".$data['KWNPEN']."</td>";
		echo "<td>".$data['STATUSAKUN']."</td>";
		echo "<td>".$data['KET_HIDUP']."</td>";
		echo "<td>".$data['USERPEN']."</td>";
		echo "<td>".$data['PASSPEN']."</td>";
		echo "<td>".$data['NOTELPEN']."</td>";
		echo "<td>".$data['EMAILPEN']."</td>";
		
		echo "<td><a href='form_ubah.php?NIK_PENDUDUK=".$data['NIK_PENDUDUK']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?NIK_PENDUDUK=".$data['NIK_PENDUDUK']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
	<a href="http://localhost/Kelompok1/S.I.D/nyoba2.php">Kembali</a>
</body>
</html>
