<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_DOMISILI = $_POST['NO_DOMISILI'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TGLSURATJU = $_POST['TGLSURATAJU'];
$KETERANGANAJU = "Sedang Proses";
$TUJUANAJU = $_POST['TUJUANAJU'];
$JENIS_SURATAJU = "Surat Pribadi";

	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_domisili VALUES('".$NO_DOMISILI."','".$NIK_PENDUDUK."', '".$TGLSURATJU."','".$TUJUANAJU."','".$KETERANGANAJU."','".$JENIS_SURATAJU."','".$ARSIP."')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		$tampil = $_POST ['TUJUANAJU'];
		header("location: reportdomisili.php?nosur=$NO_DOMISILI"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href=http://localhost/Kelompok1/S.I.D/suratfix/formdomisili.php>Kembali Ke Form</a>";
	}
	

?>
