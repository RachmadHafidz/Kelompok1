<?php
include 'koneksi.php';
?>

<?php 
// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
$nik = $_SESSION['NIK'];

$query = "SELECT * FROM penduduk inner join keluarga on penduduk.NO_KK=keluarga.NO_KK inner join sp_domisili on penduduk.NIK_PENDUDUK=keluarga.NIK_PENDUDUK  where NIK_PENDUDUK='$nik'"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

$data = mysqli_fetch_array($sql); // Ambil semua data dari hasil eksekusi $sql


?>

<body>

<center>
  <img src="kop.PNG">
<div id="content">
						<table cellpadding="0" cellspacing="0" align="left" width="100%">
						<tbody><tr>
							<td><div id="tdData" align="center">
<table width="70%" border="0" align="center" cellspacing="0" >
    <tbody><tr>
      <td colspan="2"><div align="center"><strong><u>SURAT KETERANGAN DOMISILI</u></strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Nomor : 474/__________/35.09.12.2002/2019 </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
    <td><a href="ctksp_domisili.php" target="_blank">CETAK</a></td>
    </tr>
</tbody></table>
<table width="70%" border="0" align="center" cellspacing="0" method = "post">
    <tbody><tr>
      <td colspan="3">Yang bertanda tangan dibawah ini Saya Kepala Desa Sabrang, Kecamatan Ambulu, Kabupaten Jember, menerangkan dengan sebenarnya
          bahwa:</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nik Penduduk</td>
      <td>:&nbsp;<?php echo $nik ;?></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
      <td>Nama</td>
      <td>:&nbsp;<?php
      echo $data['NAMAPENDUDUK'];
      ?></td>   
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tempat tanggal lahir</td>
      <td>:&nbsp;<?php echo $data['TMP_LAHIRPEN'];?>,<?php echo $data['TGL_LAHIRPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jenis Kelamin</td>
      <td>:&nbsp;<?php echo $data['JENIS_KELAMINPEN']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Status Perkawinan</td>
      <td>:&nbsp;<?php echo $data['STATUSPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Agama</td>
      <td>:&nbsp;<?php echo $data['AGAMAPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pekerjaan</td>
      <td>:&nbsp;<?php echo $data['PEKERJAANPEN'] ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Kewarganegaraan</td>
      <td>:&nbsp;<?php echo $data['KEWARGANEGARAANPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat Dusun,RT/RW </td>
      <td>:&nbsp;<?php echo  $data['ALAMAT_KELURGA'];?>,<?php echo $data['RRT_RW']; ?> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tanggal Surat</td>
      <td>:&nbsp;<input style ="border:none" type="date" width="30" size="30" name="TANGGAL_SURAT" ></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Orang tersebut diatas benar benar penduduk Desa Sabrang Kecamatan Ambulu, Kabupaten Jember,yang bersangkutan sampai saat ini masih berdomisili pada alamat tersebut diatas </td>
    </tr>
    <tr>
      <td colspan="3">dan surat keterangan ini akan dipergunakan untuk persyaratan administrasi</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Demikian surat keterangan ini saya  buat dengan sebenarnya dan dapatnya dipergunakan sebagai mana mestinya dan selanjutnya untuk menjadikan periksa.</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Sabrang,             </td>	
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>KEPALA DESA SABRANG</td>	
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>	
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>ZUBAERI LUTFI</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
</center>
    </body>