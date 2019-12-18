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
	<a class="btn btn-outline-info" href="http://localhost/Kelompok1/S.I.D/index1.php" role="button">Kembali</a>

</body>
</html>
