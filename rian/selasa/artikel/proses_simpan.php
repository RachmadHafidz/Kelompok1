<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$judul = $_POST['judul'];
$konten = $_POST['konten'];


	

// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO artikel VALUES('".$id."', '".$judul."', '".$konten."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: http://localhost/kelompok1/rian/selasa/nyoba.html"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}

?>
