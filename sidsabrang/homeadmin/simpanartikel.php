<?php
session_start();
        include 'koneksi.php';
        $admin= $_SESSION['nik/id'];
        $judul = $_POST['judul'];
        $isi   = $_POST['isi'];
        $kategori = $_POST['kategori'];
        $status = "Aktif";
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $fotobaru = date('dmYHis').$foto;
        $path = "images/".$fotobaru;
        
        if(move_uploaded_file($tmp, $path)){
        $query = "INSERT INTO artikel VALUES ('', '$admin', '$kategori', '$judul', '$isi', NOW(), '$fotobaru', '$status')";
        $sql = mysqli_query($koneksi, $query);
        
        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
          
          header("location:artikelin.php"); // Redirect ke halaman index.php
        }else{
          // Jika Gagal, Lakukan :
          header("location:artikelin.php?simpan_error");
        }
      }else{
        // Jika gambar gagal diupload, Lakukan :
        header("location:artikelin.php?upload_gagal");
      } 
      ?>