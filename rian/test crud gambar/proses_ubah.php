<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$ID_ADMIN = $_GET['ID_ADMIN'];

// Ambil Data yang Dikirim dari Form
$NIKADMIN = $_POST['NIKADMIN'];
$NAMAADMIN = $_POST['NAMAADMIN'];
$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$LEVEL = $_POST['LEVEL'];
$STATUS_AKUN = $_POST['STATUS_AKUN'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto = $_FILES['FOTO']['name'];
	$tmp = $_FILES['FOTO']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$foto;
	
	// Set path folder tempat menyimpan fotonya
	$path = "images/".$fotobaru;

	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT * FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("images/".$data['FOTO'])) // Jika foto ada
			unlink("images/".$data['FOTO']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE admin SET NIKADMIN='".$NIKADMIN."', NAMAADMIN='".$NAMAADMIN."', JENIS_KELAMIN='".$JENIS_KELAMIN."', USERNAME='".$USERNAME."', PASSWORD='".$PASSWORD."',LEVEL='".$LEVEL."', FOTO='".$fotobaru."', STATUS_AKUN='".$STATUS_AKUN."' WHERE ID_ADMIN='".$ID_ADMIN."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "UPDATE admin SET NIKADMIN='".$NIKADMIN."', NAMAADMIN='".$NAMAADMIN."', JENIS_KELAMIN='".$JENIS_KELAMIN."', USERNAME='".$USERNAME."', PASSWORD='".$PASSWORD."',LEVEL='".$LEVEL."', FOTO='".$fotobaru."', STATUS_AKUN='".$STATUS_AKUN."' WHERE ID_ADMIN='".$ID_ADMIN."'";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}
?>
