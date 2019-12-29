<?php
include 'koneksi.php';
$nosur=$_GET['nosur'];
    $query = "SELECT * FROM sk_belumnikah WHERE NO_BNIKAH='".$nosur."'";
     $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
     $data = mysqli_fetch_array($sql);
 
        $query_up = "UPDATE sk_belumnikah SET KETERANGANBN='Selesai' WHERE NO_BNIKAH='".$nosur."'";
        $sql_up = mysqli_query($koneksi, $query_up);
   
        if($sql_up){
          header('location:dtbnikah.php');
        }else{
            header('location:dtbnikah.php?gagal_ubah');
       }
?>