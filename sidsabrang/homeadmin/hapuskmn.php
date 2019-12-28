<?php
include 'koneksi.php';
    $ID = $_GET['id'];
    $query = "SELECT * FROM komentar WHERE ID_KMN='".$ID."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql);

        $query2 = "DELETE FROM komentar WHERE ID_KMN='".$ID."'";
        $sql2 = mysqli_query($koneksi, $query2);
  
        if($sql2){
              header('location:komentar.php');
          }else{
              
            header('location:komentar.php?gagal');
          }
           
?>