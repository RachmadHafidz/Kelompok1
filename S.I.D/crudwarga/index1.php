<html>
<head>
	<title>Penduduk</title>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container-float">
<nav class="navbar navbar-dark bg-dark"> <p><a><font class="navbar-brand" color="white">Data Warga</font></a></p>
  </nav>
  </br>

                                         
  <table class="table table-striped">

  <tr class="table-success">
	<th scope="col">NIK</th>
		<th>ID Admin</th>
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
		
		echo "</tr>";
	}
	?>
	</table>
	</div>
	<h3>Data Surat Domisili Warga</h3>
	<table class="table table-striped">

  <tr class="table-success">
	<th scope="col">No Domisili</th>
		<th>NIK Penduduk</th>
		<th>Tanggal Surat</th>
        <th>Berlaku s/d</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>NIK Pengaju</th>
        <th>Tempat Lahir Pengaju</th>
        <th>Tanggal Lahir Pengaju</th>
        <th>Status Pengaju</th>
		<th>Pekerjaan Pengaju</th>
		<th>Kewarganegaraan Pengaju</th>
		<th>Alamat Pengaju</th>
		<th>Tujuan Pengaju</th>
		<th>Keterangan Pengaju</th>
		<th>Jenis Surat Pengaju</th>
		
	

	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM sk_domisili"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NO_DOMISILI']."</td>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
		echo "<td>".$data['TGLSURATAJU']."</td>";
        echo "<td>".$data['BERLAKU']."</td>";
        echo "<td>".$data['NAMAAJU']."</td>";
        echo "<td>".$data['JKAJU']."</td>";
        echo "<td>".$data['AGAMAAJU']."</td>";
        echo "<td>".$data['NIKAJU']."</td>";
		echo "<td>".$data['TMPLHRAJU']."</td>";
		echo "<td>".$data['TGLHRAJU']."</td>";
		echo "<td>".$data['STATUSAJU']."</td>";
		echo "<td>".$data['PEKERJAANAJU']."</td>";
		echo "<td>".$data['KWNAJU']."</td>";
		echo "<td>".$data['ALAMATAJU']."</td>";
		echo "<td>".$data['TUJUANAJU']."</td>";
		echo "<td>".$data['KETERANGANAJU']."</td>";
		echo "<td>".$data['JENIS_SURATAJU']."</td>";
		
		echo "</tr>";
	}
	?>
	</table>
	</div>
</br>
	<h3>Data Surat Belum Nikah Warga</h3>
	<table class="table table-striped">

  <tr class="table-success">
	<th scope="col">No </th>
		<th>NIK Penduduk</th>
		<th>Tanggal Surat</th>
        <th>Berlaku s/d</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Jenis Kelamin Pengaju</th>
        <th>Tempat Lahir Pengaju</th>
        <th>Tanggal Lahir Pengaju</th>
        <th>Agama Pengaju</th>
		<th>Pekerjaan Pengaju</th>
		<th>Kewarganegaraan Pengaju</th>
		<th>Alamat Pengaju</th>
		<th>Tujuan Pengaju</th>
		<th>Keterangan Pengaju</th>
		<th>Jenis Surat Pengaju</th>
		
	

	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM sk_belumnikah"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NO_BNIKAH']."</td>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
		echo "<td>".$data['TGLSURATBN']."</td>";
        echo "<td>".$data['BERLAKUBN']."</td>";
        echo "<td>".$data['NAMABN']."</td>";
        echo "<td>".$data['NIKBN']."</td>";
        echo "<td>".$data['JKBN']."</td>";
        echo "<td>".$data['TMPLHRBN']."</td>";
		echo "<td>".$data['TGLHRBN']."</td>";
		echo "<td>".$data['AGAMABN']."</td>";
		echo "<td>".$data['PEKERJAANBN']."</td>";
		echo "<td>".$data['KWNBN']."</td>";
		echo "<td>".$data['ALAMATBN']."</td>";
		echo "<td>".$data['TUJUANBN']."</td>";
		echo "<td>".$data['KETERANGANBN']."</td>";
		echo "<td>".$data['JSBN']."</td>";
		
		
		echo "</tr>";
	}
	?>
	</table>
	</div>
</br>
	<h3>Data Surat SKCK Warga</h3>
	<table class="table table-striped">

  <tr class="table-success">
	<th scope="col">No SKCK </th>
		<th>NIK Penduduk</th>
		<th>Tanggal Surat</th>
        <th>Berlaku s/d</th>
        <th>Nama</th>
        <th>Jenis Kelamin Pengaju</th>
        <th>Tempat Lahir Pengaju</th>
        <th>Tanggal Lahir Pengaju</th>
        <th>NIK Pengaju</th>
		<th>Kewarganegaraan </th>
		<th>Agama Pengaju</th>
		<th>Status Pengaju</th>
		<th>Pekerjaan Pengaju</th>
		<th>Pendidikan Pengaju</th>
		<th>Alamat Pengaju</th>
		<th>Tujuan Pengaju</th>
		<th>Keterangan Pengaju</th>
		<th>Jenis Surat</th>
		
	

	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM sk_skck"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NO_SKCK']."</td>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
		echo "<td>".$data['TGLSURAT_AJU']."</td>";
        echo "<td>".$data['BERLAKU_AJU']."</td>";
        echo "<td>".$data['NAMA_AJU']."</td>";
        echo "<td>".$data['JK_AJU']."</td>";
        echo "<td>".$data['TMPLHR_AJU']."</td>";
        echo "<td>".$data['TGLHR_AJU']."</td>";
		echo "<td>".$data['NIK_AJU']."</td>";
		echo "<td>".$data['KWN_AJU']."</td>";
		echo "<td>".$data['AGAMA_AJU']."</td>";
		echo "<td>".$data['STATUS_AJU']."</td>";
		echo "<td>".$data['PEKERJAAN_AJU']."</td>";
		echo "<td>".$data['PENDIDIKAN_AJU']."</td>";
		echo "<td>".$data['ALAMAT_AJU']."</td>";
		echo "<td>".$data['TUJUAN_AJU']."</td>";
		echo "<td>".$data['KETERANGAN_AJU']."</td>";
		echo "<td>".$data['JENISURAT_AJU']."</td>";
		
		echo "</tr>";
	}
	?>
	</table>
	</div>

	</br>
	<h3>Data Surat SKCK Warga</h3>
	<table class="table table-striped">

  <tr class="table-success">
	<th scope="col">No Usaha </th>
		<th>NIK Penduduk</th>
		<th>Tanggal Surat</th>
        <th>Berlaku s/d</th>
        <th>Nama</th>
        <th>Tempat Lahir Pengaju</th>
		<th>Tanggal Lahir Pengaju</th>
		<th>Jenis Kelamin</th>
        <th>Status</th>
		<th>Pekerjaan </th>
		<th>Agama Pengaju</th>
		<th>Kewarganegaraan Pengaju</th>
		<th>NIK Pengaju</th>
		<th>Alamat</th>
		<th>Nama Usaha</th>
		<th>Tujuan Pengaju</th>
		<th>Keterangan</th>
		<th>Jenis Surat</th>
		
	

	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM sk_tempatusaha"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NO_TUSAHA']."</td>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
		echo "<td>".$data['TGLSURATTU']."</td>";
        echo "<td>".$data['BERLAKUTU']."</td>";
        echo "<td>".$data['NAMATU']."</td>";
        echo "<td>".$data['TMPLHRTU']."</td>";
        echo "<td>".$data['TGLHRTU']."</td>";
		echo "<td>".$data['JKTU']."</td>";
		echo "<td>".$data['STATUSTU']."</td>";
		echo "<td>".$data['PEKERJAANTU']."</td>";
		echo "<td>".$data['AGAMATU']."</td>";
		echo "<td>".$data['KWNTU']."</td>";
		echo "<td>".$data['NIKTU']."</td>";
		echo "<td>".$data['ALAMATU']."</td>";
		echo "<td>".$data['NAMAUSAHA']."</td>";
		echo "<td>".$data['TUJUANTU']."</td>";
		echo "<td>".$data['KETERANGAN']."</td>";
		echo "<td>".$data['JNSURAT']."</td>";
		
		echo "</tr>";
	}
	?>
	</table>
	</div>
	<a class="btn btn-outline-info" href="http://localhost/Kelompok1/S.I.D/index.php" role="button">Kembali</a>

</body>
</html>
