<?php
include 'koneksi.php';
session_start();

$nik2= $_SESSION['nik/id'];
$nama2= $_POST['nama'];
$agama2 = $_POST['agama'];
$telp2 = $_POST['telp'];
$status2 = $_POST['status'];
$pend2 = $_POST['pend'];
$peker2 = $_POST['peker'];
$tmplhr2 = $_POST['tmp'];
$kwn2 = $_POST['kwn'];
$tglhr2 = $_POST['tgl'];
$jk2 = $_POST['jk'];


$query0 = "SELECT * FROM penduduk WHERE NIK_PENDUDUK='".$nik2."'";
$cek = mysqli_query($koneksi, $query0); // Eksekusi/Jalankan query dari variabel $query

if($cek ->num_rows){

if(!empty($nama2) && !empty($agama2) && !empty($telp2) && !empty($status2) && !empty($pend2) && !empty($peker2) && !empty($tmplhr2) && !empty($kwn2) && !empty($tglhr2) && !empty($jk2)){

$sql_ubah = "UPDATE penduduk SET NAMAPEN='".$nama2."', AGAMAPEN='".$agama2."', NOTELPEN='".$telp2."', STATUSPEN='".$status2."', PENDIDIKANPEN='".$pend2."', PEKERJAANPEN='".$peker2."', TEMPATLHR='".$tmplhr2."', TANGGALHR='".$tglhr2."', KWNPEN='".$kwn2."', JK_PEN='".$jk2."', KET_HIDUP='".$hidup2."' WHERE NIK_PENDUDUK='".$nik2."' LIMIT 1" ;
$ubah = mysqli_query($koneksi, $sql_ubah);
      if($ubah){
        header("location: profil.php");
      }else{
        header("location: ubahprofil.php?simpan_error");
      }
}else{
    header("location: ubahprofil.php?kosong");
}
}

?>