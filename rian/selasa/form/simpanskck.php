<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_SKCK = $_POST['NO_SKCK'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TGLSURAT_AJU = $_POST['TGLSURAT_AJU'];
$NAMA_AJU = $_POST['NAMA_AJU'];
$NIK_AJU = $_POST['NIK_AJU'];
$JK_AJU = $_POST['JK_AJU'];
$STATUS_AJU = $_POST['STATUS_AJU'];
$KWNAJU = $_POST['KWNAJU'];
$TMPLHR_AJU = $_POST['TMPLHR_AJU'];
$TGLHR_AJU= $_POST['TGLHR_AJU'];
$AGAMA_AJU = $_POST['AGAMA_AJU'];
$PEKERJAAN_AJU = $_POST['PEKERJAAN_AJU'];
$PENDIDIKAN_AJU = $_POST['PENDIDIKAN_AJU'];
$ALAMAT_AJU = $_POST['ALAMAT_AJU'];
$TUJUAN_AJU = $_POST['TUJUAN_AJU'];
$KETERANGAN_AJU = $_POST['KETERANGAN_AJU'];
$JENISURAT_AJU = $_POST['JENISURAT_AJU'];


	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_skck VALUES('".$NO_SKCK."','".$NIK_PENDUDUK."', '".$TGLSURAT_AJU."','".$NAMA_AJU."','".$NIK_AJU."','".$JK_AJU."','".$STATUS_AJU."','".$KWNAJU."','".$TMPLHR_AJU."','".$TGLHR_AJU."','".$AGAMA_AJU."','".$PEKERJAAN_AJU."','".$PENDIDIKAN_AJU."','".$ALAMAT_AJU."','".$TUJUAN_AJU."','".$KETERANGAN_AJU."','".$JENISURAT_AJU."')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		$tampil = $_POST ['TUJUAN_AJU'];
		header("location: http://localhost/Kelompok1/hafidz/sp/reportdomisili.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
	

?>
