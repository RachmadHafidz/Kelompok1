<?php
include 'koneksi.php';
$nosur=$_GET['nosur'];
    $query = "SELECT * FROM sk_skck WHERE NO_SKCK='".$nosur."'";
     $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
     $data = mysqli_fetch_array($sql);
 
        $query_up = "UPDATE sk_skck SET KETERANGAN_AJU='Tidak Valid' WHERE NO_SKCK='".$nosur."'";
        $sql_up = mysqli_query($koneksi, $query_up);
   
        if($sql_up){
          header('location:dtskck.php');
        }else{
            header('location:dtskck.php?gagal_ubah');
       }
?>