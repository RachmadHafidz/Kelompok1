<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nis = $_POST['nis'];
$nama_lengkap = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$status_pekerjaan = $_POST['status_pekerjaan'];
$tempat_kerja = $_POST['tempat_kerja'];
$no_kamar = $_POST['no_kamar'];
$nama_ortu = $_POST['nama_ortu'];
$pekerjaan_ortu = $_POST['pekerjaan_ortu'];
$alamat_rumah = $_POST['alamat_rumah'];
$no_telepon = $_POST['no_telepon'];
$mulai_menetap = $_POST['mulai_menetap'];
$keluar_pondok = $_POST ['keluar_pondok'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO data_santri VALUES('".$nis."', '".$nama_lengkap."', '".$tanggal_lahir."', '".$status_pekerjaan."', '".$tempat_kerja."', '".$no_kamar."', '".$nama_ortu."', '".$pekerjaan_ortu."', '".$alamat_rumah."', '".$no_telepon."', '".$mulai_menetap."', '".$keluar_pondok."', '".$fotobaru."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
