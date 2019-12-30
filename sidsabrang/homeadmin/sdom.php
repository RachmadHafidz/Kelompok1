<?php
include 'koneksi.php';
$nosur=$_GET['nosur'];
    $query = "SELECT * FROM sk_domisili WHERE NO_DOMISILI='".$nosur."'";
     $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
     $data = mysqli_fetch_array($sql);
 
        $query_up = "UPDATE sk_domisili SET KETERANGANAJU='Selesai' WHERE NO_DOMISILI='".$nosur."'";
        $sql_up = mysqli_query($koneksi, $query_up);
   
        if($sql_up){
          header('location:dtdomisili.php');
        }else{
            header('location:dtdomisili.php?gagal_ubah');
       }
?>