<html>
<head>
	<title></title>
</head>
<body>
	<h1>Data Surat Domisili</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>No surat</th>
		<th>nik PENDUDUK</th>
		<th>tanggal surat</th>
        <th>nama pengaju</th>
        <th>jk peng/th>
        <th>agama peng</th>
        <th>nik peng</th>
        <th>tmp lahir peng</th>
        <th>tgl lahir peng</th>
        <th>Pekerjaan peng</th>
        <th>alamat peng</th>
		<th>tujuan peng</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi1.php";
	
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
		
		echo "</tr>";
	}
	?>
	</table>
	<a href="http://localhost/Kelompok1/rian/selasa/nyoba2.php">Kembali</a>
</body>
</html>
