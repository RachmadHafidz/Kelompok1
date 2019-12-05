<!DOCTYPE html>
<html >
<?php
include 'koneksi.php';
?>

<?php 
// mengaktifkan session


// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
$id = $_GET['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$query = "SELECT * FROM artikel1 WHERE id='".$id."'"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

$data = mysqli_fetch_array($sql); // Ambil semua data dari hasil eksekusi $sql


?>

<style>
		#wrap {background:white ;width:800px ; height:600;}
		body {background: white; width:800px;height:600;}
	</style>
<head>

	<title>Print Surat Pengantar Domisili</title>
	
</head>
<center>
<div align="center">
	<table width="100%" border="0" align="center" cellspacing="0" >
		<tr>
			<td width="50"></td>
			<td  align="left"><img src="Jember.png" width="150" height="120"></td>
			<td width="600" >
				<div align="center" >
					<b>
						<font size="4">
							PEMERINTAH KABUPATEN JEMBER<br>KECAMATAN AMBULU<br>DESA SABRANG
						</font><br>
						<font size="4">
							JL. Watu Ulo No.01 Telp: 081 249 065 993 kode Pos 68172<br>
						</font>
					</b>
				</div>
			</td>	
			<td width="200"></td>
		</tr>
		<tr>
			<td colspan="5"><hr size="4" color="black"></td>		
		</tr>
	</table>
</div>

<body>
	<div id="wrap">
  	<div class="row">
 		<div class="col-3"></div>
 		<div class="col-6" align="center">
				<br><b>
					<font size="4.5">
						<u>SURAT KETERANGAN DOMISILI</u></font><br>
					<font size="3">
						Nomor : 474 /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/35.09.12.2002/&nbsp;&nbsp;&nbsp;
					</font>
		 		</b><br><br><br>
				 <div class="col" align="left" margin="15px">

				 
				 <br>
				<font size="4" align="left">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang  bertanda tangan dibawah ini Saya Kepala Desa Sabrang,Kecamatan Ambulu, Kabupaten Jember , menerangkan dengan sebenarnya bahwa :
				</font>
				<br><br>
				<table border="0" >
				<tbody>
				<center><tr><td>Nama Lengkap</td><td>:</td><td><?php echo $data['id'];?></td></tr>
		
				<tr><td>Jenis Kelamin</td><td>:</td><td> <?php echo $data['judul']; ?></td></tr>
				<tr><td>Status Perkawinan</td><td>:</td><td> <?php echo $data['isi'];?></td></tr>
				
				</center>
				</tbody></table>
				<br>
				</font>
				<font size="3" face="Tahoma">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut diatas benar benar penduduk Desa Sabrang Kecamatan 
				Ambulu, Kabupaten Jember, <br>yang bersangkutan sampai saat ini masih berdomisili pada alamat tersebut diatas dan surat keterangan ini<br>akan dipergunakan untuk persyaratan administrasi
				<?php echo $data['TUJUANJU']; ?>
				<br>
				<font size="3" face="Tahoma">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini saya buat dengan sebenarnya dan dapatnya dipergunakan sebagai mana<br> mestinya dan selanjutnya untuk menjadikan periksa.
				
				</font>
				</div>
 		</div><br>
 	</div>

<div align="center">
	<table>
		<tr>
			<td width="300"><br></td>	
			<td width="245" align="right">
				<div align="center" class="time"><font size="4">
					Sabrang,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
					<br>
					KEPALA DESA SABRANG
				</font></div>
			</td>
		</tr>
		
		<tr>
			<td width="300"></td>
			<td width="245" align="right"><b>
				<div align="center"><font size="3">
					<br><br><br><br><br>
					<u>ZUBAERI LUTFI</u>
				</font></div></b>
			</td>
		</tr>
	</table>
</div>
</center>
<script>
		window.print();
</script>
</body>
</html>
