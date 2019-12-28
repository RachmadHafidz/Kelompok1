<?php
include 'koneksi.php';
session_start();

$nik2= $_SESSION['nik/id'];
$pass1=md5($_POST['pass1']);
$pass2=md5($_POST['pass2']);


$query0 = "SELECT * FROM penduduk WHERE NIK_PENDUDUK='".$nik2."'";
$cek = mysqli_query($koneksi, $query0); // Eksekusi/Jalankan query dari variabel $query

if($cek ->num_rows){

    if($pass1==$pass2){

        $sql_ubah = "UPDATE penduduk SET PASSPEN='".$pass2."' WHERE NIK_PENDUDUK='".$nik2."' LIMIT 1" ;
        $ubah = mysqli_query($koneksi, $sql_ubah);
            if($ubah){
                header("location: indexlogin.php?sukses");
            }else{
                header("location: indexlogin.php?simpan_error");
            }
        }else{
            header("location: indexlogin.php?gagal");
        }
}

?>