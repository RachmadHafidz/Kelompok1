<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<center>
 
		<h2>CETAK PRINT DATA DARI DATABASE DENGAN PHP<br/><a href="https://www.malasngoding.com">WWW.MALASNGODING.COM</a></h2>
    </center>
 
		<?php 
		include 'koneksi.php';
		?>
    
		<a href="sp_domisilipribadi.php" target="_blank">CETAK</a>
    <center>
		<table border="1">
			<tr>
				<th>No SuratDom</th>
				<th>NIK Penduduk</th>
				<th>Tanggal Surat</th>
				<th>Nama Pengaju</th>
                <th>Jenis Kelamin</th>
                <th>Agama Pengaju</th>
                <th>NIK Pengaju</th>
                <th>Tempat Lahir Pengaju</th>
                <th>Tanggal Lahir Pengaju</th>
                <th>Pekerjaan Pengaju</th>
                <th>Alamat Pengaju</th>
                <th>Tujuan</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"select * from sp_domisili");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
                <td><?php echo $data['NO_SURATDOM']; ?></td>
				<td><?php echo $data['NIK_PENDUDUK']; ?></td>
				<td><?php echo $data['TANGGAL_SURAT']; ?></td>
				<td><?php echo $data['NAMA_PENGAJU']; ?></td>
                <td><?php echo $data['JK_PENGAJU']; ?></td>
                <td><?php echo $data['AGAMA_PENGAJU']; ?></td>
                <td><?php echo $data['NIK_PENGAJU']; ?></td>
                <td><?php echo $data['TMP_LAHIRPENGAJU']; ?></td>
                <td><?php echo $data['TGL_LAHIRPENGAJU']; ?></td>
                <td><?php echo $data['PEKERJAANPENGAJU']; ?></td>
                <td><?php echo $data['ALAMATPENGAJU']; ?></td>
                <td><?php echo $data['TUJUAN']; ?></td>
    		</tr>
			<?php 
			}
			?>
		</table>
 
		<br/>
 
 
	</center>
</body>
</html>