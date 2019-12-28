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

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/Jember.png">

    <!-- Style CSS -->
 

</head>
<body>
<h1>Riwayat Surat Pribadi</h1>
	Riwayat Surat Domisili Untuk Pribadi
	<table border="1" width="100%" > 
	<tr> 
		<th>Nama Penduduk</th>
		<th>NIK Pribadi</th>
		<th>Tanggal Surat </th>
       	<th>Tujuan Surat</th>
		<th>Keterangan Surat</th>
		<th>Jenis Surat</th>
	</tr>
	<?php
    
	$set = "select penduduk.NAMAPEN, sk_domisili.NIK_PENDUDUK, sk_domisili.TGLSURATAJU, sk_domisili.TUJUANAJU, sk_domisili.KETERANGANAJU, sk_domisili.JENIS_SURATAJU FROM penduduk, sk_domisili WHERE sk_domisili.NIK_PENDUDUK='$nik' AND sk_domisili.NIK_PENDUDUK = penduduk.NIK_PENDUDUK and sk_domisili.JENIS_SURATAJU = 'Surat Pribadi'"; // Query untuk menampilkan semua data siswa

	$set1 = " select penduduk.NAMAPEN, sk_belumnikah.NIK_PENDUDUK, sk_belumnikah.TGLSURATBN, sk_belumnikah.TUJUANBN, sk_belumnikah.KETERANGANBN, sk_belumnikah.JSBN FROM penduduk, sk_belumnikah WHERE sk_belumnikah.NIK_PENDUDUK = '$nik' and sk_belumnikah.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_belumnikah.JSBN ='Surat Pribadi' ";

	$set2 = "select penduduk.NAMAPEN, sk_skck.NIK_PENDUDUK, sk_skck.TGLSURAT_AJU, sk_skck.TUJUAN_AJU, sk_skck.KETERANGAN_AJU, sk_skck.JENISURAT_AJU FROM penduduk, sk_skck WHERE sk_skck.NIK_PENDUDUK = '$nik' and sk_skck.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_skck.JENISURAT_AJU ='Surat Pribadi'";

	$set3= "select penduduk.NAMAPEN, sk_tempatusaha.NIK_PENDUDUK, sk_tempatusaha.TGLSURATTU, sk_tempatusaha.TUJUANTU, sk_tempatusaha.KETERANGAN, sk_tempatusaha.JNSURAT FROM penduduk, sk_tempatusaha WHERE sk_tempatusaha.NIK_PENDUDUK = '$nik' and sk_tempatusaha.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_tempatusaha.JNSURAT ='Surat Pribadi'";

	$play = mysqli_query($conn, $set); // Eksekusi/Jalankan query dari variabel $query
	$play1 = mysqli_query($conn, $set1);
	$play2 = mysqli_query($conn, $set2);
	$play3 = mysqli_query($conn, $set3);
	while($data = mysqli_fetch_array($play)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NAMAPEN']."</td>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
        echo "<td>".$data['TGLSURATAJU']."</td>";
        echo "<td>".$data['TUJUANAJU']."</td>";
		echo "<td>".$data['KETERANGANAJU']."</td>";
        echo "<td>".$data['JENIS_SURATAJU']."</td>";
		echo "</tr>";
	}	
	?>
	<tr>
		<td>  Riwayat Surat Belum Nikah untuk Pribadi </td>	
	</tr>
	<?php
	while($show = mysqli_fetch_array($play1)){
		echo "<tr>";
		
		echo "<td>".$show['NAMAPEN']."</td>";
		echo "<td>".$show['NIK_PENDUDUK']."</td>";
        echo "<td>".$show['TGLSURATBN']."</td>";
        echo "<td>".$show['TUJUANBN']."</td>";
		echo "<td>".$show['KETERANGANBN']."</td>";
        echo "<td>".$show['JSBN']."</td>";
        echo "</tr>";
       
	}
	?>

	<tr>
		<td>  Riwayat Surat SKCK untuk Pribadi </td>	
	</tr>
	<?php
	while($show1 = mysqli_fetch_array($play2)){
		echo "<tr>";
		
		echo "<td>".$show1['NAMAPEN']."</td>";
		echo "<td>".$show1['NIK_PENDUDUK']."</td>";
        echo "<td>".$show1['TGLSURAT_AJU']."</td>";
        echo "<td>".$show1['TUJUAN_AJU']."</td>";
		echo "<td>".$show1['KETERANGAN_AJU']."</td>";
        echo "<td>".$show1['JENISURAT_AJU']."</td>";
        echo "</tr>";
       
	}
	?>

<tr>
		<td>  Riwayat Surat Tempat Usaha untuk Pribadi </td>	
	</tr>
	<?php
	while($show2 = mysqli_fetch_array($play3)){
		echo "<tr>";
		
		echo "<td>".$show2['NAMAPEN']."</td>";
		echo "<td>".$show2['NIK_PENDUDUK']."</td>";
        echo "<td>".$show2['TGLSURATTU']."</td>";
        echo "<td>".$show2['TUJUANTU']."</td>";
		echo "<td>".$show2['KETERANGAN']."</td>";
        echo "<td>".$show2['JNSURAT']."</td>";
        echo "</tr>";
       
	}
	?>
 
	</table>





	<h1>Riwayat Surat Perwakilan</h1>
	Riwayat Surat Domisili Untuk Perwakilan
	<table border="1" width="100%" > 
	<tr> 
		<th>Nama Penduduk</th>
		<th>NIK Pribadi</th>
		<th>Tanggal Surat </th>
        <th>NIK Pengaju</th>
		<th>Tujuan Surat</th>
		<th>Keterangan Surat</th>
		<th>Jenis Surat</th>
	</tr>

<?php
    
	$query = "select penduduk.NAMAPEN, sk_domisili.NIK_PENDUDUK, sk_domisili.NIKAJU, sk_domisili.TGLSURATAJU, sk_domisili.TUJUANAJU, sk_domisili.KETERANGANAJU, sk_domisili.JENIS_SURATAJU FROM penduduk, sk_domisili WHERE sk_domisili.NIK_PENDUDUK='$nik' AND sk_domisili.NIK_PENDUDUK = penduduk.NIK_PENDUDUK and sk_domisili.JENIS_SURATAJU = 'Surat Perwakilan'"; // Query untuk menampilkan semua data siswa

	$query1 = " select penduduk.NAMAPEN, sk_belumnikah.NIK_PENDUDUK, sk_belumnikah.NIKBN, sk_belumnikah.TGLSURATBN, sk_belumnikah.TUJUANBN, sk_belumnikah.KETERANGANBN, sk_belumnikah.JSBN FROM penduduk, sk_belumnikah WHERE sk_belumnikah.NIK_PENDUDUK = '$nik' and sk_belumnikah.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_belumnikah.JSBN ='Surat Perwakilan' ";

	$query2 = "select penduduk.NAMAPEN, sk_skck.NIK_PENDUDUK, sk_skck.NIK_AJU, sk_skck.TGLSURAT_AJU, sk_skck.TUJUAN_AJU, sk_skck.KETERANGAN_AJU, sk_skck.JENISURAT_AJU FROM penduduk, sk_skck WHERE sk_skck.NIK_PENDUDUK = '$nik' and sk_skck.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_skck.JENISURAT_AJU ='Surat Perwakilan'";

	$query3 = "select penduduk.NAMAPEN, sk_tempatusaha.NIK_PENDUDUK, sk_tempatusaha.NIKTU, sk_tempatusaha.TGLSURATTU, sk_tempatusaha.TUJUANTU, sk_tempatusaha.KETERANGAN, sk_tempatusaha.JNSURAT FROM penduduk, sk_tempatusaha WHERE sk_tempatusaha.NIK_PENDUDUK = '$nik' and sk_tempatusaha.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_tempatusaha.JNSURAT ='Surat Perwakilan'";

	$run = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
	$run1 = mysqli_query($conn, $query1);
	$run2 = mysqli_query($conn, $query2);
	$run3 = mysqli_query($conn, $query3);
	while($data = mysqli_fetch_array($run)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['NAMAPEN']."</td>";
		echo "<td>".$data['NIK_PENDUDUK']."</td>";
        echo "<td>".$data['TGLSURATAJU']."</td>";
        echo "<td>".$data['NIKAJU']."</td>";
		echo "<td>".$data['TUJUANAJU']."</td>";
		echo "<td>".$data['KETERANGANAJU']."</td>";
        echo "<td>".$data['JENIS_SURATAJU']."</td>";
		echo "</tr>";
	}	
	?>
	<tr>
		<td>  Riwayat Surat Belum Nikah untuk Perwakilan </td>	
	</tr>
	<?php
	while($show = mysqli_fetch_array($run1)){
		echo "<tr>";
		
		echo "<td>".$show['NAMAPEN']."</td>";
		echo "<td>".$show['NIK_PENDUDUK']."</td>";
        echo "<td>".$show['TGLSURATBN']."</td>";
        echo "<td>".$show['NIKBN']."</td>";
		echo "<td>".$show['TUJUANBN']."</td>";
		echo "<td>".$show['KETERANGANBN']."</td>";
        echo "<td>".$show['JSBN']."</td>";
        echo "</tr>";
       
	}
	?>

	<tr>
		<td>  Riwayat Surat SKCK untuk Perwakilan </td>	
	</tr>
	<?php
	while($show1 = mysqli_fetch_array($run2)){
		echo "<tr>";
		
		echo "<td>".$show1['NAMAPEN']."</td>";
		echo "<td>".$show1['NIK_PENDUDUK']."</td>";
        echo "<td>".$show1['TGLSURAT_AJU']."</td>";
        echo "<td>".$show1['NIK_AJU']."</td>";
		echo "<td>".$show1['TUJUAN_AJU']."</td>";
		echo "<td>".$show1['KETERANGAN_AJU']."</td>";
        echo "<td>".$show1['JENISURAT_AJU']."</td>";
        echo "</tr>";
       
	}
	?>

<tr>
		<td>  Riwayat Surat Tempat Usaha untuk Perwakilan </td>	
	</tr>
	<?php
	while($show2 = mysqli_fetch_array($run3)){
		echo "<tr>";
		
		echo "<td>".$show2['NAMAPEN']."</td>";
		echo "<td>".$show2['NIK_PENDUDUK']."</td>";
        echo "<td>".$show2['TGLSURATTU']."</td>";
        echo "<td>".$show2['NIKTU']."</td>";
		echo "<td>".$show2['TUJUANTU']."</td>";
		echo "<td>".$show2['KETERANGAN']."</td>";
        echo "<td>".$show2['JNSURAT']."</td>";
        echo "</tr>";
       
	}
	?>
 
	</table>
</body>
</html>
