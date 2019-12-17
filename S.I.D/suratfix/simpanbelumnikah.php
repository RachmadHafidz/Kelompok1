<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_BNIKAH = $_POST['NO_BNIKAH'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TGLSURATBN = $_POST['TGLSURATBN'];
$KETERANGANABN = $_POST['KETERANGANABN'];
$TUJUANBN = $_POST['TUJUANBN'];
$JNBN = $_POST['JSBN'];



	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_belumnikah VALUES('".$NO_BNIKAH."','".$TGLSURATBN."','".$NIK_PENDUDUK."','".$TUJUANBN."','".$KETRANGANBN."','".$JSBN."')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		$tampil = $_POST ['TUJUANBN'];
		header("location: reportbelumnikah.php?id=$NO_BNIKAH"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href=http://localhost/Kelompok1/S.I.D/suratfix/formbelumnikah.php>Kembali Ke Form</a>";
	}
	

?>
