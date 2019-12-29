<?php
include 'koneksi.php';
$nosur=$_GET['nosur'];
    $query = "SELECT * FROM sk_tempatusaha WHERE NO_TUSAHA='".$nosur."'";
     $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
     $data = mysqli_fetch_array($sql);
 
        $query_up = "UPDATE sk_tempatusaha SET KETERANGAN='Valid' WHERE NO_TUSAHA='".$nosur."'";
        $sql_up = mysqli_query($koneksi, $query_up);
   
        if($sql_up){
          header('location:dtusaha.php');
        }else{
            header('location:dtusaha.php?gagal_ubah');
       }
?>