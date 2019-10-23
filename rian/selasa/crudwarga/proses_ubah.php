<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$NIK = $_GET['NIK'];

// Ambil Data yang Dikirim dari Form
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$rtrw = $_POST['rt/rw'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];
$kewarganegaraan = $_POST['kewarganegaraan'];


// Cek apakah user ingin mengubah fotonya atau tidak
 // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	
	
	

	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT * FROM warga WHERE NIK='".$NIK."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql		
		// Proses ubah data ke Database
		$query = "UPDATE warga SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', 'rt/rw'='".$rtrw."',desa='".$desa."',kecamatan='".$kecamatan."',agama='".$agama."','status'='".$status."',pekerjaan='".$pekerjaan."',kewarganegaraan='".$kewarganegaraan."' WHERE NIK='".$NIK."'";
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
	$query = "UPDATE warga SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', 'rt/rw'='".$rtrw."', desa='".$desa."', kecamatan='".$kecamatan."', agama='".$agama."', 'status'='".$status."', pekerjaan='".$pekerjaan."', kewarganegaraan='".$kewarganegaraan."'  WHERE NIK='".$NIK."'";
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
