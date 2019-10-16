<html>
<head>
	<title>Perangkat Desa</title>
</head>
<body>
	<h1>Perangkat Desa</h1>
	<table border="1" width="100%">
	<tr>
        
        <th>Foto</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jabatan</th>

	
		
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM p_desa"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['NIK']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td>".$data['jabatan']."</td>";
      
	
		echo "</tr>";
	}
	?>
    </table>
    <p><a href="http://localhost/Kelompok1/rian/selasa/nyoba.html">Kembali</a></p>
</body>
</html>
