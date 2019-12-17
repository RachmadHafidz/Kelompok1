<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_TUSAHA = $_POST['NO_TUSAHA'];
$TGLSURATJU = $_POST['TGLSURAT'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TUJUANTU = $_POST['TUJUANTU'];
$KETERANGAN = $_POST['KETERANGAN'];
$JNSURAT = $_POST['JNSURAT'];
$ARSIP = $_POST['ARSIP'];



	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_tempatusaha VALUES('".$NO_TUSAHA."','".$TGLSURATJU."','".$NIK_PENDUDUK."','".$TUJUANTU."','".$KETERANGAN."','".$JNSURAT."','".$ARSIP."')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: reportsuratusaha1.php?id=$NO_TUSAHA"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
	

?>
