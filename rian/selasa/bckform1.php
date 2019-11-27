<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$NIK = $_POST['NIKADMIN'];
$PASSWORD= $_POST['PASSWORD'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from admin where NIKADMIN='$NIK' and PASSWORD='$PASSWORD'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['LEVEL']=="warga"){
 
		// buat session login dan username
		$_SESSION['NIK'] = $NIK;
		$_SESSION['LEVEL'] = "warga";
		// alihkan ke halaman dashboard admin
        header("location:http://localhost/Kelompok1/rian/selasa/nyoba2.php");
 
	
 
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index1.php?pesan=gagal");
	}	
}else{
	header("location:index1.php?pesan=gagal");
}
 
?>