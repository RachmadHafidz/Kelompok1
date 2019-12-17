<html>
<head>
	<title>Perangkat Desa</title>
	<meta charset="UTF-8">
	<style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
</head>
<body>

	<h1>Perangkat Desa</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
        
   <th>Foto</th>
        <th>ID</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Jabatan</th>
      <th>Tahun Jabatan</th>
      <th>Jenis Kelamin</th>
      <th>Berakhir Jabatan</th>
      <th>Level</th>
      <th>Status Akun</th>
      <th>No Telp</th>
      <th>Email</th>
      <th>Username</th>
      <th>Password</th>

	
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
		echo "<td>".$data['NIK_NIPADMIN']."</td>";
		echo "<td>".$data['NAMAADMIN']."</td>";
      echo "<td>".$data['JENIS_KELAMIN']."</td>";
      echo "<td>".$data['JABATAN']."</td>";
      echo "<td>".$data['TAHUN_JABATAN']."</td>";
      echo "<td>".$data['JENIS_KELAMIN']."</td>";
      echo "<td>".$data['BERAKHIR_JABATAN']."</td>";
      echo "<td>".$data['LEVEL']."</td>";
      echo "<td>".$data['STATUS_AKUN']."</td>";
      echo "<td>".$data['NOTELP']."</td>";      
      echo "<td>".$data['EMAIL']."</td>";
      echo "<td>".$data['USERNAME']."</td>";
      echo "<td>".$data['PASSWORD']."</td>";
      

	
		echo "<td><a href='http://localhost/Kelompok1/S.I.D/crud/form_ubah.php?ID_ADMIN=".$data['ID_ADMIN']."'>Ubah</a></td>";
		echo "<td><a href='http://localhost/Kelompok1/S.I.D/crud/proses_hapus.php?ID_ADMIN=".$data['ID_ADMIN']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
