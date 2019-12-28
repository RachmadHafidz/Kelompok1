<?php
include 'koneksi.php';
if(isset($_POST['simpankat'])) {
        $id= $_POST['id'];
        $kat= $_POST['kategori'];
        $stat = "Aktif";
    
        if(!empty($kat)){
          $query = "INSERT INTO kategori VALUES('".$id."', '".$kat."', '".$stat."')";
                      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                          header("location:artikel.php");
                         }else{
                          header("location:artikel.php?simpan_eror");
                         }
        }else{
            header("location:artikel.php?kosong");
        } 
} 
?>