<?php
// Load file koneksi.php
include "koneksi.php";
session_start();
// Ambil Data yang Dikirim dari Form
$NO_SKCK = $_POST['NO_SKCK'];
$NIK_PENDUDUK = $_SESSION['NIK_PENDUDUK'];
$TGLSURAT_AJU = $_POST['TGLSURAT_AJU'];
$TUJUAN_AJU = $_POST['TUJUAN_AJU'];
$KETERANGAN_AJU = "Sedang Proses";
$JENISURAT_AJU = "Surat Pribadi";


// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_skck(NO_SKCK, NIK_PENDUDUK, TGLSURAT_AJU, TUJUAN_AJU, KETERANGAN_AJU, JENISURAT_AJU) VALUES('$NO_SKCK','$NIK_PENDUDUK', '$TGLSURAT_AJU', '$TUJUAN_AJU','$KETERANGAN_AJU','$JENISURAT_AJU')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: reportskck.php?id=$NO_SKCK"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href=http://localhost/Kelompok1/S.I.D/suratfix/formskck.php>Kembali Ke Form</a>";
	}
	

?>
