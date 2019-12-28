<?php
    include 'koneksi.php';

		if (isset($_POST['btnkomen'])) {
        $idArtikel= $_GET['id'];
        $nama  = $_POST['name'];
        $isi   = $_POST['isi'];
        $status ="Aktif";
        
            $query = "INSERT INTO komentar VALUES ('', '$idArtikel', '$nama', '$isi', NOW(), '$status') ";
            $sql = mysqli_query($koneksi, $query);
            
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
              // Jika Sukses, Lakukan :
              header("location:detailberita.php?id=$idArtikel"); // Redirect ke halaman index.php
            }else{
              // Jika Gagal, Lakukan :
              header("location:detailberita.php?gagal");
            }
        	}
		?>