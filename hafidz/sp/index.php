<html>
<head>
	<title></title>
</head>
<body>
	<?php include "koneksi.php";?>
	<h1>Data Surat Domisili</h1>
	<a href="domisiliindex.php">Tambah Data</a><br><br>
	<?php session_start (); 
	
echo $_SESSION['NIK_PENDUDUK'];

	
 ?>

	</br>
	<table border="1" width="100%">
	<tr>
		<th>No surat</th>
		<th>nik PENDUDUK</th>
		<th>tanggal surat</th>
        <th>nama penduduk</th>
        <th>jk peng</th>
        <th>agama</th>
        <th>NIKPENGAJU</th>
        <th>tmp lahir peng</th>
        <th>tgl lahir peng</th>
        <th>Pekerjaan peng</th>
        <th>alamat peng</th>
		<th>tujuan peng</th>
		<th>KETERANGAN</th>
		<th>JENIS SURAT</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	
	
	$nik= $_SESSION['NIK_PENDUDUK'];
$nilai = mysqli_query($koneksi,"select * from sk_domisili where NIK_PENDUDUK= $nik");


	while($data = mysqli_fetch_array($nilai)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NO_DOMISILI']."</td>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
		echo "<td>".$data['TGLSURATAJU']."</td>";
        echo "<td>".$data['NAMAAJU']."</td>";
        echo "<td>".$data['JKAJU']."</td>";
        echo "<td>".$data['AGAMAAJU']."</td>";
        echo "<td>".$data['NIKPENGAJU']."</td>";
        echo "<td>".$data['TMPLHRAJU']."</td>";
        echo "<td>".$data['TGLHRAJU']."</td>";
        echo "<td>".$data['PEKERJAAN_AJU']."</td>";
		echo "<td>".$data['ALAMATAJU']."</td>";
		echo "<td>".$data['TUJUANAJU']."</td>";
		echo "<td>".$data['KETERANGANAJU']."</td>";
		echo "<td>".$data['JENIS_SURATAJU']."</td>";
		echo "<td><a href='form_ubah.php?NIK=".$data['NIK_PENDUDUK']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?NIK=".$data['NIK_PENDUDUK']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
	<a href="http://localhost/Kelompok1/rian/selasa/nyoba2.php">Kembali</a>
</body>
</html>
