<html>

<?php
	// Load file koneksi.php
    include "fungsi/config.php"; 
	session_start();
	$nik=$_SESSION['nik/id'];
?>

<head> 
    
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SID SABRANG</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Admin</title>

  <!-- Custom fonts for this template-->
  <link href="homeadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="homeadmin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 
  <link href="homeadmin/css/sb-admin.css" rel="stylesheet">
</head>
<body>

<div id="content-wrapper">
<div class="container-fluid">

	<div class="card mb-3">
    <div class="card-header">
    <h5> Riwayat Surat Pribadi</h5>
    </div>
	<div class="card-body">
    <div class="table-responsive">
	<table class="table table-bordered" id="dataTable" border="1" width="100%" > 
	<tr> 
		<th>No Surat</th>
		<th>Nama Penduduk</th>
		<th>NIK Pribadi</th>
		<th>Tanggal Surat </th>
       	<th>Tujuan Surat</th>
		<th>Keterangan Surat</th>
		<th>Jenis Surat</th>
		<th>Cetak</th>
		
	</tr>
	<tr>
	<td colspan = "8" > <b>Riwayat Surat Domisili untuk Pribadi</b> </td>
	</tr>
	<?php
    
	$set = "select penduduk.NAMAPEN, sk_domisili.NO_DOMISILI, sk_domisili.NIK_PENDUDUK, sk_domisili.TGLSURATAJU, sk_domisili.TUJUANAJU, sk_domisili.KETERANGANAJU, sk_domisili.JENIS_SURATAJU FROM penduduk, sk_domisili WHERE sk_domisili.NIK_PENDUDUK='$nik' AND sk_domisili.NIK_PENDUDUK = penduduk.NIK_PENDUDUK and sk_domisili.JENIS_SURATAJU = 'Surat Pribadi'"; // Query untuk menampilkan semua data siswa

	$set1 = " select penduduk.NAMAPEN, sk_belumnikah.NO_BNIKAH, sk_belumnikah.NIK_PENDUDUK, sk_belumnikah.TGLSURATBN, sk_belumnikah.TUJUANBN, sk_belumnikah.KETERANGANBN, sk_belumnikah.JSBN FROM penduduk, sk_belumnikah WHERE sk_belumnikah.NIK_PENDUDUK = '$nik' and sk_belumnikah.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_belumnikah.JSBN ='Surat Pribadi' ";

	$set2 = "select penduduk.NAMAPEN, sk_skck.NO_SKCK, sk_skck.NIK_PENDUDUK, sk_skck.TGLSURAT_AJU, sk_skck.TUJUAN_AJU, sk_skck.KETERANGAN_AJU, sk_skck.JENISURAT_AJU FROM penduduk, sk_skck WHERE sk_skck.NIK_PENDUDUK = '$nik' and sk_skck.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_skck.JENISURAT_AJU ='Surat Pribadi'";

	$set3= "select penduduk.NAMAPEN, sk_tempatusaha.NO_TUSAHA, sk_tempatusaha.NIK_PENDUDUK, sk_tempatusaha.TGLSURATTU, sk_tempatusaha.TUJUANTU, sk_tempatusaha.KETERANGAN, sk_tempatusaha.JNSURAT FROM penduduk, sk_tempatusaha WHERE sk_tempatusaha.NIK_PENDUDUK = '$nik' and sk_tempatusaha.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_tempatusaha.JNSURAT ='Surat Pribadi'";

	$play = mysqli_query($conn, $set); // Eksekusi/Jalankan query dari variabel $query
	$play1 = mysqli_query($conn, $set1);
	$play2 = mysqli_query($conn, $set2);
	$play3 = mysqli_query($conn, $set3);
	while($data = mysqli_fetch_array($play)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NO_DOMISILI']."</td>";
		echo "<td>".$data['NAMAPEN']."</td>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
        echo "<td>".$data['TGLSURATAJU']."</td>";
        echo "<td>".$data['TUJUANAJU']."</td>";
		echo "<td>".$data['KETERANGANAJU']."</td>";
        echo "<td>".$data['JENIS_SURATAJU']."</td>";
		
	?>
	
	 <td><a class="fas fa-few fa-download" href="reportdomisili.php?nosur=<?php echo $data['NO_DOMISILI']?>&nik=<?php echo $data['NIK_PENDUDUK']?>"></a> </tr>
	
	<?php
	}	
	?>
	<tr>
		<td colspan = "8" > <b>Riwayat Surat Belum Nikah untuk Pribadi</b> </td>	
	</tr>
		<?php
	while($show = mysqli_fetch_array($play1)){
		echo "<tr>";
		echo "<td>".$show['NO_BNIKAH']."</td>";
		echo "<td>".$show['NAMAPEN']."</td>";
		echo "<td>".$show['NIK_PENDUDUK']."</td>";
        echo "<td>".$show['TGLSURATBN']."</td>";
        echo "<td>".$show['TUJUANBN']."</td>";
		echo "<td>".$show['KETERANGANBN']."</td>";
        echo "<td>".$show['JSBN']."</td>";
		?>
	
		<td><a class="fas fa-few fa-download" href="reportbnikah.php?nosur=<?php echo $show['NO_BNIKAH']?>&nik=<?php echo $show['NIK_PENDUDUK']?>"></a> </tr>
	   
	<?php
	}	
	?>

	<tr>
	<td colspan = "8" > <b> Riwayat Surat SKCK untuk Pribadi</b> </td>	
	</tr>
	<?php
	while($show1 = mysqli_fetch_array($play2)){
		echo "<tr>";
		echo "<td>".$show1['NO_SKCK']."</td>";
		echo "<td>".$show1['NAMAPEN']."</td>";
		echo "<td>".$show1['NIK_PENDUDUK']."</td>";
        echo "<td>".$show1['TGLSURAT_AJU']."</td>";
        echo "<td>".$show1['TUJUAN_AJU']."</td>";
		echo "<td>".$show1['KETERANGAN_AJU']."</td>";
        echo "<td>".$show1['JENISURAT_AJU']."</td>";
        
	?>
	
		<td><a class="fas fa-few fa-download" href="reportskck.php?nosur=<?php echo $show1['NO_SKCK']?>&nik=<?php echo $show1['NIK_PENDUDUK']?>"></a> </tr>
	   
	<?php
	}	
	?>

	<tr>
		<td colspan = "8" > <b> Riwayat Surat Tempat Usaha untuk Pribadi </b> </td>	
	</tr>
	<?php
	while($show2 = mysqli_fetch_array($play3)){
		echo "<tr>";
		echo "<td>".$show2['NO_TUSAHA']."</td>";
		echo "<td>".$show2['NAMAPEN']."</td>";
		echo "<td>".$show2['NIK_PENDUDUK']."</td>";
        echo "<td>".$show2['TGLSURATTU']."</td>";
        echo "<td>".$show2['TUJUANTU']."</td>";
		echo "<td>".$show2['KETERANGAN']."</td>";
        echo "<td>".$show2['JNSURAT']."</td>";
		?>
	
		<td><a class="fas fa-few fa-download" href="reportusaha.php?nosur=<?php echo $show2['NO_TUSAHA']?>&nik=<?php echo $show2['NIK_PENDUDUK']?>"></a> </tr>
	   
	<?php
	}	
	?>
</table>
</div>
</div>
<div class="card-footer small text-muted"></div>
        </div>




</br>
</br>
	<div class="card mb-3">
    <div class="card-header">
    <h5>Riwayat Surat Perwakilan</h5>
    </div>
	<div class="card-body">
    <div class="table-responsive">
	<table class="table table-bordered" id="dataTable" border="1" width="100%"> 
	<tr> 
		<th>No Surat</th>
		<th>Nama Penduduk</th>
		<th>NIK Pribadi</th>
		<th>Tanggal Surat </th>
        <th>NIK Pengaju</th>
		<th>Tujuan Surat</th>
		<th>Keterangan Surat</th>
		<th>Jenis Surat</th>
		<th>Cetak</th>
	</tr>
	<tr>
	<td colspan = "8" > <b>Riwayat Surat Domisili untuk Perwakilan</b> </td>
	</tr>

	<?php
    
	$query = "select penduduk.NAMAPEN, sk_domisili.NO_DOMISILI, sk_domisili.NIK_PENDUDUK, sk_domisili.NIKAJU, sk_domisili.TGLSURATAJU, sk_domisili.TUJUANAJU, sk_domisili.KETERANGANAJU, sk_domisili.JENIS_SURATAJU FROM penduduk, sk_domisili WHERE sk_domisili.NIK_PENDUDUK='$nik' AND sk_domisili.NIK_PENDUDUK = penduduk.NIK_PENDUDUK and sk_domisili.JENIS_SURATAJU = 'Surat Perwakilan'"; // Query untuk menampilkan semua data siswa

	$query1 = " select penduduk.NAMAPEN, sk_belumnikah.NO_BNIKAH, sk_belumnikah.NIK_PENDUDUK, sk_belumnikah.NIKBN, sk_belumnikah.TGLSURATBN, sk_belumnikah.TUJUANBN, sk_belumnikah.KETERANGANBN, sk_belumnikah.JSBN FROM penduduk, sk_belumnikah WHERE sk_belumnikah.NIK_PENDUDUK = '$nik' and sk_belumnikah.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_belumnikah.JSBN ='Surat Perwakilan' ";

	$query2 = "select penduduk.NAMAPEN, sk_skck.NO_SKCK, sk_skck.NIK_PENDUDUK, sk_skck.NIK_AJU, sk_skck.TGLSURAT_AJU, sk_skck.TUJUAN_AJU, sk_skck.KETERANGAN_AJU, sk_skck.JENISURAT_AJU FROM penduduk, sk_skck WHERE sk_skck.NIK_PENDUDUK = '$nik' and sk_skck.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_skck.JENISURAT_AJU ='Surat Perwakilan'";

	$query3 = "select penduduk.NAMAPEN, sk_tempatusaha.NO_TUSAHA, sk_tempatusaha.NIK_PENDUDUK, sk_tempatusaha.NIKTU, sk_tempatusaha.TGLSURATTU, sk_tempatusaha.TUJUANTU, sk_tempatusaha.KETERANGAN, sk_tempatusaha.JNSURAT FROM penduduk, sk_tempatusaha WHERE sk_tempatusaha.NIK_PENDUDUK = '$nik' and sk_tempatusaha.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_tempatusaha.JNSURAT ='Surat Perwakilan'";

	$run = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
	$run1 = mysqli_query($conn, $query1);
	$run2 = mysqli_query($conn, $query2);
	$run3 = mysqli_query($conn, $query3);
	while($ex = mysqli_fetch_array($run)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$ex['NO_DOMISILI']."</td>";
		echo "<td>".$ex['NAMAPEN']."</td>";
		echo "<td>".$ex['NIK_PENDUDUK']."</td>";
        echo "<td>".$ex['TGLSURATAJU']."</td>";
        echo "<td>".$ex['NIKAJU']."</td>";
		echo "<td>".$ex['TUJUANAJU']."</td>";
		echo "<td>".$ex['KETERANGANAJU']."</td>";
        echo "<td>".$ex['JENIS_SURATAJU']."</td>";
		
	?>
		<td><a class="fas fa-few fa-download" href="rdom.php?nosur=<?php echo $ex['NO_DOMISILI']?>&nik=<?php echo $ex['NIKAJU']?>"></a> </tr>
	   
	<?php
	}	
	?>

	<tr>
	<td colspan = "9" > <b>  Riwayat Surat Belum Nikah untuk Perwakilan </b></td>	
	</tr>
	<?php
	while($show = mysqli_fetch_array($run1)){
		echo "<tr>";
		echo "<td>".$show['NO_BNIKAH']."</td>";
		echo "<td>".$show['NAMAPEN']."</td>";
		echo "<td>".$show['NIK_PENDUDUK']."</td>";
        echo "<td>".$show['TGLSURATBN']."</td>";
        echo "<td>".$show['NIKBN']."</td>";
		echo "<td>".$show['TUJUANBN']."</td>";
		echo "<td>".$show['KETERANGANBN']."</td>";
        echo "<td>".$show['JSBN']."</td>";
	?>
		<td><a class="fas fa-few fa-download" href="rbnikah.php?nosur=<?php echo $show['NO_BNIKAH']?>&nik=<?php echo $show['NIKBN']?>"></a> </tr>
	   
	<?php
	}	
	?>

	<tr>
	<td colspan = "9" > <b> Riwayat Surat SKCK untuk Perwakilan </b></td>	
	</tr>
	<?php
	while($show1 = mysqli_fetch_array($run2)){
		echo "<tr>";
		echo "<td>".$show1['NO_SKCK']."</td>";
		echo "<td>".$show1['NAMAPEN']."</td>";
		echo "<td>".$show1['NIK_PENDUDUK']."</td>";
        echo "<td>".$show1['TGLSURAT_AJU']."</td>";
        echo "<td>".$show1['NIK_AJU']."</td>";
		echo "<td>".$show1['TUJUAN_AJU']."</td>";
		echo "<td>".$show1['KETERANGAN_AJU']."</td>";
        echo "<td>".$show1['JENISURAT_AJU']."</td>";
	?>
		<td><a class="fas fa-few fa-download" href="rskck.php?nosur=<?php echo $show1['NO_SKCK']?>&nik=<?php echo $show1['NIK_AJU']?>"></a> </tr>
	   
	<?php
	}	
	?>
<tr>
	<td colspan = "9" > <b> Riwayat Surat Tempat Usaha untuk Perwakilan </b></td>	
	</tr>
	<?php
	while($show2 = mysqli_fetch_array($run3)){
		echo "<tr>";
		echo "<td>".$show2['NO_TUSAHA']."</td>";
		echo "<td>".$show2['NAMAPEN']."</td>";
		echo "<td>".$show2['NIK_PENDUDUK']."</td>";
        echo "<td>".$show2['TGLSURATTU']."</td>";
        echo "<td>".$show2['NIKTU']."</td>";
		echo "<td>".$show2['TUJUANTU']."</td>";
		echo "<td>".$show2['KETERANGAN']."</td>";
        echo "<td>".$show2['JNSURAT']."</td>";
       
	?>
		<td><a class="fas fa-few fa-download" href="rtusaha.php?nosur=<?php echo $show2['NO_TUSAHA']?>&nik=<?php echo $show2['NIKTU']?>"></a> </tr>
	   
	<?php
	}	
	?>
 
	</table>
	</div>
</div>
<div class="card-footer small text-muted"></div>
        </div>

	
</body>
</html>
