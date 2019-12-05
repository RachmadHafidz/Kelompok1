<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NIK = $_POST['NIK'];
$NO_KK = $_POST['NO_KK'];
$NAMA = $_POST['NAMA'];
$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
$TMP_LHR = $_POST['TMP_LHR'];
$TGL_LHR = $_POST['TGL_LHR'];
$AGAMA = $_POST['AGAMA'];
$PENDIDIKAN = $_POST['PENDIDIKAN'];
$PEKERJAAN = $_POST['PEKERJAAN'];
$ALAMAT = $_POST['ALAMAT'];
$RWRT = $_POST['RWRT'];
$DESA = $_POST['DESA'];
$KECAMATAN = $_POST['KECAMATAN'];
$KAB_KOTA = $_POST['KAB_KOTA'];
$KODE_POS = $_POST['KODE_POS'];
$PROVINSI = $_POST['PROVINSI'];
$KEWARGANEGARAAN = $_POST['KEWARGANEGARAAN'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$TGL_DAFTAR = $_POST['TGL_DAFTAR'];
$LEVEL = $_POST['LEVEL'];
$STATUS = $_POST['STATUS'];
$FOTO = $_FILES['FOTO']['name'];
$tmp = $_FILES['FOTO']['tmp_name'];

	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$FOTO;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO warga VALUES('".$NIK."', '".$NO_KK."', '".$NAMA."', '".$JENIS_KELAMIN."',  '".$TMP_LHR."','".$TGL_LHR."', '".$AGAMA."', '".$PENDIDIKAN."', '".$PEKERJAAN."', '".$ALAMAT."', '".$RWRT."', '".$DESA."', '".$KECAMATAN."', '".$KAB_KOTA."', '".$KODE_POS."', '".$PROVINSI."', '".$KEWARGANEGARAAN."', '".$USERNAME."', '".$PASSWORD."', '".$TGL_DAFTAR."', '".$LEVEL."','".$fotobaru."', '".$STATUS."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: http://localhost/Kelompok1/rian/rin/home/dtwarga.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='http://localhost/Kelompok1/rian/rin/home/dtwarga.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='http://localhost/Kelompok1/rian/rin/home/dtwarga.php'>Kembali Ke Form</a>";
}
?>
