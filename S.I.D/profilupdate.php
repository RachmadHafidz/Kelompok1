<?php
session_start();
// Load file koneksi.php
include "koneksi.php";
$_SESSION['NIK_PENDUDUK'];
$a = $_SESSION ['NIK_PENDUDUK'];
// Ambil Data yang Dikirim dari Form
$NO_KK = $_POST['NO_KK'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$NAMAPENDUDUK = $_POST['NAMAPENDUDUK'];
$TEMPATLHR = $_POST['TEMPATLHR'];
$TGL_LAHIRPEN = $_POST['TGL_LAHIRPEN'];
$JK_PEN = $_POST['JK_PEN'];
$STATUSPEN = $_POST['STATUSPEN'];
$AGAMAPEN = $_POST['AGAMAPEN'];
$PEKERJAANPEN = $_POST['PEKERJAANPEN'];
$KWN = $_POST['KEWARGANEGARAANPEN'];
$ALAMATPEN = $_POST['ALAMATPEN'];

	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "update penduduk, keluarga set NAMAPEN = '$NAMAPENDUDUK', TEMPATLHR = '$TEMPATLHR', TANGGALHR = '$TGL_LAHIRPEN', JK_PEN='$JK_PEN', STATUSPEN = '$STATUSPEN', AGAMAPEN = '$AGAMAPEN', PEKERJAANPEN = '$PEKERJAANPEN', KWNPEN = '$KWN', ALAMAT = '$ALAMATPEN' where NIK_PENDUDUK = $a AND penduduk.NO_KK = KELUARGA.NO_KK ";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		
		header("location: tampilanprofil.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href=http://localhost/Kelompok1/S.I.D/suratfix/formdomisili.php>Kembali Ke Form</a>";
	}
	

?>
