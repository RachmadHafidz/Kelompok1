<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$NO_KK = $_GET['NO_KK'];

// Ambil Data yang Dikirim dari Form
$ID_ADMIN = $_POST['ID_ADMIN'];
$TGL_DIBUAT = $_POST['TGL_DIBUAT'];
$KEPALA_KELUARGA = $_POST['KEPALA_KELUARGA'];
$ALAMAT_KELURGA = $_POST['ALAMAT_KELURGA'];
$RRT_RW = $_POST['RRT_RW'];
$DESA = $_POST['DESA'];
$KEC = $_POST['KEC'];
$KAB_KOTA = $_POST['KAB_KOTA'];
$KODE_POS = $_POST['KODE_POS'];
$PROVINSI = $_POST['PROVINSI'];


		$query = "SELECT * FROM keluarga WHERE NO_KK='".$NO_KK."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

	
		
		// Proses ubah data ke Database
		$query = "UPDATE keluarga SET ID_ADMIN='".$ID_ADMIN."', TGL_DIBUAT='".$TGL_DIBUAT."', KEPALA_KELUARGA='".$KEPALA_KELUARGA."', ALAMAT_KELURGA='".$ALAMAT_KELURGA."', RRT_RW='".$RRT_RW."', DESA='".$DESA."', KEC='".$KEC."', KAB_KOTA='".$KAB_KOTA."', KODE_POS='".$KODE_POS."', PROVINSI='".$PROVINSI."' WHERE NO_KK='".$NO_KK."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
?>
