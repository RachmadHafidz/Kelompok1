<?php 
session_start();
    include 'koneksi.php';
      $idArtikel =$_GET['id'];
      $judul = $_POST['judul'];
      $isi   = $_POST['isi'];
      $kategori = $_POST['kategori'];
	
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
		$query = "SELECT * FROM artikel WHERE ID_ARTIKEL = '$idArtikel' ";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("images/".$data['FOTO_ARTIKEL'])) // Jika foto ada
			unlink("images/".$data['FOTO_ARTIKEL']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE artikel SET JUDUL_ARTIKEL = '$judul', ISI_ARTIKEL = '$isi', ID_KATEGORI = '$kategori', FOTO_ARTIKEL='".$fotobaru."' WHERE ID_ARTIKEL = '$idArtikel' ";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: artikel.php"); // Redirect ke halaman index.php
		}else{
            // Jika Gagal, Lakukan :
            header("location: editArtikel.php?id=$idArtikel&simpan_error");
		}
	}else{
        // Jika gambar gagal diupload, Lakukan :
        header("location: editArtikel.php?id=$idArtikel&upload_gagal");
	}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "UPDATE artikel SET JUDUL_ARTIKEL = '$judul', ISI_ARTIKEL = '$isi', ID_KATEGORI='$kategori'  WHERE ID_ARTIKEL = '$idArtikel' ";
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: artikel.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		header("location: editArtikel.php?id=$idArtikel&simpan_error");
	}
}
 ?>