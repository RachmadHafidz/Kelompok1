<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_DOMISILI = $_POST['NO_DOMISILI'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TGLSURATAJU = $_POST['TGLSURATAJU'];

$TUJUANAJU = $_POST['TUJUANAJU'];
$KETERANGANAJU = $_POST['KETERANGANAJU'];
$JENIS_SURATAJU = $_POST['JENIS_SURATAJU'];
$ARSIP = $_POST['ARSIP'];

	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_domisili VALUES('".$NO_DOMISILI."','".$NIK_PENDUDUK."', '".$TGLSURATAJU."','".$TUJUANAJU."','".$KETERANGANAJU."','".$JENIS_SURATAJU."' ,'".$ARSIP."')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql)
		{ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: reportdomisili1.php?nosur=$NO_DOMISILI"); // Redirect ke halaman index.php

		}
	else
			{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
				echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
			}
	

?>
