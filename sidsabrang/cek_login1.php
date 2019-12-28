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
		$_SESSION['nik/id'] = $NIK;
		$_SESSION['nama'] = $login['NAMAPEN'];
		$_SESSION['levelad'] = "Penduduk";

		header("location:indexlogin.php");

	}else if($login['STATUS_AKUN']== "Nonaktif"){
		header("location:index.php?tidak_valid");
	}else{
		header("location:index.php?tidak_valid");
	}
	// cek jika user login sebagai admin	
}else{
	header("location:index.php?login_error");
}

	
?>