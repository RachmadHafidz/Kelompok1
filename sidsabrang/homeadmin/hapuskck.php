<?php
include 'koneksi.php';
    $no = $_GET['nosur'];
    $query = "SELECT * FROM sk_skck WHERE NO_SKCK='".$no."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql);

        $query2 = "DELETE FROM sk_skck WHERE NO_SKCK='".$no."'";
        $sql2 = mysqli_query($koneksi, $query2);
  
        if($sql2){
              header('location:dtskck.php');
          }else{
              
            header('location:dtskck.php?gagal');
          }
           
?>