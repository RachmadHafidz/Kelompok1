<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_SURATDOM = $_POST['NO_SURATDOM'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TANGGAL_SURAT = $_POST['TANGGAL_SURAT'];
$NAMA_PENGAJU = $_POST['NAMA_PENGAJU'];
$JK_PENGAJU = $_POST['JK_PENGAJU'];
$AGAMA_PENGAJU = $_POST['AGAMA_PENGAJU'];
$NIK_PENGAJU = $_POST['NIK_PENGAJU'];
$TMP_LAHIRPENGAJU = $_POST['TMP_LAHIRPENGAJU'];
$TGL_LAHIRPENGAJU = $_POST['TGL_LAHIRPENGAJU'];
$PEKERJAANPENGAJU = $_POST['PEKERJAANPENGAJU'];
$ALAMATPENGAJU = $_POST['ALAMATPENGAJU'];
$TUJUAN = $_POST['TUJUAN'];
	

// Proses upload
 // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO sp_domisili VALUES('".$NO_SURATDOM."', '".$NIK_PENDUDUK."', '".$TANGGAL_SURAT."', '".$NAMA_PENGAJU."', '".$JK_PENGAJU."', '".$AGAMA_PENGAJU."', '".$NIK_PENGAJU."', '".$TMP_LAHIRPENGAJU."', '".$TGL_LAHIRPENGAJU."', '".$PEKERJAANPENGAJU."', '".$ALAMATPENGAJU."', '".$TUJUAN."')";
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