<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$NIK = $_POST['NIK_PENDUDUK'];
$PASSWORD= md5($_POST['PASSPEN']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from penduduk where NIK_PENDUDUK='$NIK' and PASSPEN='$PASSWORD'");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0)
{	
	$_SESSION['NIK_PENDUDUK'] = $NIK;    

	header("location:http://localhost/Kelompok1/S.I.D//nyoba2.php");
	// cek jika user login sebagai admin
	
	
}
else
	{
	header("location:index1.php?pesan=gagal");
	}
 
	
?>