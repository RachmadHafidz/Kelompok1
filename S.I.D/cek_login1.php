<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$NIK = $_POST['NIK_PENDUDUK'];
$PASSWORD= md5($_POST['PASSPEN']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from penduduk where NIK_PENDUDUK='$NIK' and PASSPEN='$PASSWORD'");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){

	$login = mysqli_fetch_assoc($data);
	if($login['STATUSAKUN']== "Aktif"){	
		$_SESSION['status'] = "login";
		$_SESSION['NIK_PENDUDUK'] = $NIK;
		$_SESSION['nama'] = $login['NAMAPEN'];
		$_SESSION['levelad'] = "Warga";

		header("location:index1.php");

	}else if($login['STATUS_AKUN']== "Nonaktif"){
		header("location:login1.php?tidak_valid");
	}else{
		header("location:login1.php?tidak_valid");
	}
	// cek jika user login sebagai admin	
}else{
	header("location:login1.php?login_error");
}
 
	
?>