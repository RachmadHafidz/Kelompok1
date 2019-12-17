<html>
<head>
	<title>Perangkat Desa</title>
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
        <th>Foto</th>
        <th>ID</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Jabatan</th>
      <th>Tahun Jabatan</th>
      <th>Jenis Kelamin</th>
      <th>Berakhir Jabatan</th>
      
      <th>Status Akun</th>
      <th>No Telp</th>
      <th>Email</th>
      <th>Username</th>
  

	
		
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
		echo "<td>".$data['NIK_NIPADMIN']."</td>";
		echo "<td>".$data['NAMAADMIN']."</td>";
      echo "<td>".$data['JENIS_KELAMIN']."</td>";
      echo "<td>".$data['JABATAN']."</td>";
      echo "<td>".$data['TAHUN_JABATAN']."</td>";
      echo "<td>".$data['JENIS_KELAMIN']."</td>";
      echo "<td>".$data['BERAKHIR_JABATAN']."</td>";
 
      echo "<td>".$data['STATUS_AKUN']."</td>";
      echo "<td>".$data['NOTELP']."</td>";      
      echo "<td>".$data['EMAIL']."</td>";
      echo "<td>".$data['USERNAME']."</td>";
      
      

		echo "</tr>";
	}
	?>
    </table>
    </div>
    <a class="btn btn-outline-info" href="http://localhost/Kelompok1/S.I.D/index1.php" role="button">Kembali</a>
    
</body>
</html>
