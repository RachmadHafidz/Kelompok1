<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_SKCK = $_POST['NO_SKCK'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TGLSURAT_AJU = $_POST['TGLSURAT_AJU'];
$TUJUAN_AJU = $_POST['TUJUAN_AJU'];
$KETERANGAN_AJU = $_POST['KETERANGAN_AJU'];
$JENISURAT_AJU = $_POST['JENISURAT_AJU'];
$ARSIP = $_POST['ARSIP'];


	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_skck VALUES('".$NO_SKCK."','".$NIK_PENDUDUK."', '".$TGLSURAT_AJU."','".$TUJUAN_AJU."','".$KETERANGAN_AJU."','".$JENISURAT_AJU."','".$ARSIP."')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		$tampil = $_POST ['TUJUAN_AJU'];
		header("location: reportskck.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href=http://localhost/Kelompok1/hafidz/suratfix/formskck.php>Kembali Ke Form</a>";
	}
	

?>
