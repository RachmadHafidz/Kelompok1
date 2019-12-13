<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_BNIKAH = $_POST['NO_BNIKAH'];
$TGLSURABN = $_POST['TGLSURATBN'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TUJUANBN = $_POST['TUJUANBN'];
$KETERANGANBN = $_POST['KETERANGANBN'];
$JSBN = $_POST['JSBN'];
$ARSIP = $_POST['ARSIP'];



	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_belumnikah VALUES('".$NO_BNIKAH."','".$TGLSURATBN."','".$NIK_PENDUDUK."','".$TUJUANBN."','".$KETERANGANBN."','".$JSBN."','".$ARSIP."')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: reportnikah.php?id=$NO_BNIKAH"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
	

?>
