<?php 
        include 'koneksi.php';
              $id = $_POST['ID'];
              $nik = $_POST['NIK'];
              $nama = $_POST['NAMA'];
              $jk = $_POST['JK'];
              $user = $_POST['USER'];
              $pass = md5($_POST['PASS']);
              $level = $_POST['LEVEL'];
              $foto = $_FILES['FOTO']['name'];
              $tmp = $_FILES['FOTO']['tmp_name'];
              $sa = $_POST['SA'];

              $fotobaru = date('dmYHis').$foto;
              $path = "images/".$fotobaru;
              if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
                // Proses simpan ke Database
                $query = "INSERT INTO admin VALUES('".$id."', '".$nik."', '".$nama."', '".$jk."', '".$user."', '".$pass."', '".$level."' ,'".$fotobaru."', '".$sa."')";
                $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                  // Jika Sukses, Lakukan :
                  header("location: pdadmin.php"); // Redirect ke halaman index.php
                }else{
                  // Jika Gagal, Lakukan :
                  header("location:pdadmin.php?simpan_error");
                }
              }else{
                // Jika gambar gagal diupload, Lakukan :
                header("location:pdadmin.php?upload_gagal");
              }
            
              

 
             // $query="INSERT INTO admin SET ID='$id',NIKADMIN='$nik',NAMAADMIN='$nama',JENIS_KELAMIN='$jk',USERNAME='$user,PASSWORD='$pass',LEVEL='$level',FOTO='$foto',STATUS_AKUN='$sa'";
              //mysqli_query($koneksi, $query);
             // header("location:pdadmin.php?pesan=input");
            ?>