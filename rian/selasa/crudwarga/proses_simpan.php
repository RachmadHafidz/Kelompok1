<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$rtrw = $_POST['rt/rw'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];
$kewarganegaraan = $_POST['kewarganegaraan'];

	

// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO warga VALUES('".$NIK."', '".$nama."', '".$jenis_kelamin."', '".$alamat."', '".$rtrw."', '".$desa."', '".$kecamatan."', '".$agama."', '".$status."', '".$pekerjaan."', '".$kewarganegaraan."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}

?>
