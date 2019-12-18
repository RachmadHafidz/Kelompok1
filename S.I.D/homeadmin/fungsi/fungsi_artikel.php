<?php

function tampilArtikel()
{
	global $conn;

	$query = "SELECT * FROM artikel";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}

function tampilArtikelLimit()
{
	global $conn;

	$query = "SELECT * FROM artikel LIMIT 4";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}

function detailArtikel($idArtikel)
{
	global $conn;

	$query = "SELECT * FROM artikel WHERE id = '$idArtikel' ";
	$res   = mysqli_query($conn, $query);

	$row   = mysqli_fetch_assoc($res);

	return $row;
}
function kategori($nkategori)
{
	global $conn;

	$query = "SELECT * FROM artikel WHERE id = '$nkategori' ";
	$res   = mysqli_query($conn, $query);

	$row   = mysqli_fetch_assoc($res);

	return $row;
}


function postArtikel($data)
{
	global $conn;

	$judul = $data['judul'];
	$isi   = $data['isi'];
	$tanggal   = $data['tanggal'];
	$kategori = $data['kategori'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "images/".$fotobaru;
	
	if(move_uploaded_file($tmp, $path)){
	$query = "INSERT INTO artikel VALUES ('', '$judul', '$isi', '$fotobaru','$tanggal') ";
	$sql = mysqli_query($conn, $query);
	
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
}
function postArtikel1($data)
{
	global $conn;

	
	$nama_kategory   = $data['nama_kategory'];
	
	

	$query1 = "INSERT INTO kategori VALUES ('', '$nama_kategory' ) ";
	$sql = mysqli_query($conn, $query1);
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
	}
}

function editArtikel($data, $idArtikel)
{
	global $conn;

	$judul = $data['judul'];
	$isi   = $data['isi'];
	
	if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
		// Ambil data foto yang dipilih dari form
		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto;
	
	// Set path folder tempat menyimpan fotonya
	$path = "images/".$fotobaru;

	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT * FROM artikel WHERE id = '$idArtikel' ";
		$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("images/".$data['foto'])) // Jika foto ada
			unlink("images/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE artikel SET judul = '$judul', isi = '$isi', foto='".$fotobaru."' WHERE id = '$idArtikel' ";
		$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query

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
	$query = "UPDATE artikel SET judul = '$judul', isi = '$isi', foto='".$fotobaru."' WHERE id = '$idArtikel' ";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}
}

function hapusArtikel($idArtikel)
{
	global $conn; 

	$query = "DELETE FROM artikel WHERE id = '$idArtikel' ";

	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}

function hapusArtikelKomen($idArtikel)
{
	global $conn; 

	$query = "DELETE artikel.*, komentar.* FROM artikel, komentar WHERE artikel.id = '$idArtikel' AND komentar.artikel = '$idArtikel' ";

	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}

function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
	return implode(" ",array_splice($words,0,$word_limit));
	
	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}

 

function cekPunyaKomen($idArtikel)
{
	global $conn;
	$query = "SELECT * FROM komentar WHERE artikel = '$idArtikel' ";
	$res   = mysqli_query($conn,$query);

	$cek   = mysqli_num_rows($res);

	if ($cek > 0 ) {
		hapusArtikelKomen($idArtikel);
	} else {
		hapusArtikel($idArtikel);
	}


}

