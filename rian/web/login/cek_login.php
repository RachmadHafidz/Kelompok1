<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$login = mysqli_fetch_assoc($data);
	
	if($login['STATUS_AKUN']== "Aktif"){
		if($login['LEVEL']=="Super Admin"){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['status'] = "login";
			$_SESSION['levelad'] = "Administrator";
			$_SESSION['idadmin'] = $login['ID_ADMIN'];
			$_SESSION['namaadmin'] = $login['NAMAADMIN'];
			$_SESSION['nikad'] = $login['NIKADMIN'];
			$_SESSION['jkad'] = $login['JENIS_KELAMIN'];
			$_SESSION['fotoad'] = $login['FOTO'];
			
			header("location:home/index.php");
		}else if($login['LEVEL']=="Admin"){
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['levelad'] = "Admin";
			$_SESSION['idadmin'] = $login['ID_ADMIN'];
			$_SESSION['namaadmin'] = $login['NAMAADMIN'];
			$_SESSION['nikad'] = $login['NIKADMIN'];
			$_SESSION['jkad'] = $login['JENIS_KELAMIN'];
			$_SESSION['fotoad'] = $login['FOTO'];
			header("location:home/index2.php");

		}else if($login['LEVEL']=="Perangkat Desa"){
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['levelad'] = "Perangkat Desa";
			$_SESSION['idadmin'] = $login['ID_ADMIN'];
			$_SESSION['namaadmin'] = $login['NAMAADMIN'];
			$_SESSION['nikad'] = $login['NIKADMIN'];
			$_SESSION['jkad'] = $login['JENIS_KELAMIN'];
			$_SESSION['fotoad'] = $login['FOTO'];
			header("location:home/index3.php");
		}
		else{
			header("location:index.php?akses_gagal");
		}
	}else if($login['STATUS_AKUN']== "Nonaktif"){
			header("location:index.php?tidak_valid");
	}else{
		header("location:index.php?tidak_valid");
	}
}else{
	header("location:index.php?login_error");
}
?>
