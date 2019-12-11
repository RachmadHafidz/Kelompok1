<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_TUSAHA = $_POST['NO_TUSAHA'];
$TGLSURATJU = $_POST['TGLSURAT'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TUJUANTU = $_POST['TUJUANTU'];
$KETERANGAN = $_POST['KETERANGAN'];



	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_tempatusaha VALUES('".$NO_TUSAHA."','".$TGLSURATJU."','".$NIK_PENDUDUK."','".$TUJUANTU."','".$KETERANGAN."')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		$tampil = $_POST ['TUJUANJU'];
		header("location: reportsuratusaha.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
	

?>
