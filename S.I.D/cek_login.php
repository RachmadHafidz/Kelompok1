<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$USERNAME = $_POST['USERNAME'];
$PASSWORD = md5($_POST['PASSWORD']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from admin where USERNAME='$USERNAME' and PASSWORD='$PASSWORD'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['LEVEL']=="Administrator"){
 
		// buat session login dan username
		$_SESSION['USERNAME'] = $USERNAME;
		$_SESSION['LEVEL'] = "Administrator";
		// alihkan ke halaman dashboard admin
		header("location:http://localhost/Kelompok1/S.I.D/home/index.php");
 
	
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>