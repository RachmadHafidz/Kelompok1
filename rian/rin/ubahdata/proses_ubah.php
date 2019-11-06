<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$NIK = $_GET['NIK'];

// Ambil Data yang Dikirim dari Form
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


// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$FOTO = $_FILES['FOTO']['name'];
	$tmp = $_FILES['FOTO']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$FOTO;
	
	// Set path folder tempat menyimpan fotonya
	$path = "images/".$fotobaru;

	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT * FROM warga WHERE NIK='".$NIK."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("images/".$data['FOTO'])) // Jika foto ada
			unlink("images/".$data['FOTO']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE warga SET NO_KK='".$NO_KK."', NAMA='".$NAMA."', JENIS_KELAMIN='".$JENIS_KELAMIN."', FOTO='".$fotobaru."', TMP_LHR='".$TMP_LHR."', TGL_LHR='".$TGL_LHR."', AGAMA='".$AGAMA."', PENDIDIKAN='".$PENDIDIKAN."', PEKERJAAN='".$PEKERJAAN."',  ALAMAT='".$ALAMAT."', RWRT='".$RWRT."', DESA='".$DESA."', KECAMATAN='".$KECAMATAN."', KAB_KOTA='".$KAB_KOTA."', KODE_POS='".$KODE_POS."', PROVINSI='".$PROVINSI."', KEWARGANEGARAAN='".$KEWARGANEGARAAN."', USERNAME='".$USERNAME."', 'PASSWORD'='".$PASSWORD."', TGL_DAFTAR='".$TGL_DAFTAR."', 'LEVEL'='".$LEVEL."', 'STATUS'='".$STATUS."' WHERE NIK='".$NIK."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: http://localhost/Kelompok1/rian/rin/home/dtwarga.php"); // Redirect ke halaman index.php
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
    $query = "UPDATE warga SET NO_KK='".$NO_KK."', NAMA='".$NAMA."', JENIS_KELAMIN='".$JENIS_KELAMIN."', FOTO='".$fotobaru."', TMP_LHR='".$TMP_LHR."', TGL_LHR='".$TGL_LHR."', AGAMA='".$AGAMA."', PENDIDIKAN='".$PENDIDIKAN."', PEKERJAAN='".$PEKERJAAN."',  ALAMAT='".$ALAMAT."', RWRT='".$RWRT."', DESA='".$DESA."', KECAMATAN='".$KECAMATAN."', KAB_KOTA='".$KAB_KOTA."', KODE_POS='".$KODE_POS."', PROVINSI='".$PROVINSI."', KEWARGANEGARAAN='".$KEWARGANEGARAAN."', USERNAME='".$USERNAME."', 'PASSWORD'='".$PASSWORD."', TGL_DAFTAR='".$TGL_DAFTAR."', 'LEVEL'='".$LEVEL."', 'STATUS'='".$STATUS."' WHERE NIK='".$NIK."'";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: http://localhost/Kelompok1/rian/rin/home/dtwarga.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}
?>
