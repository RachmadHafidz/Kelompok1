<?php 
$koneksi = mysqli_connect("localhost","root","","db_desa3");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$lama=1;
$ket="Sedang Proses";
$query = "DELETE FROM sk_domisili WHERE DATEDIFF(CURDATE(), BERLAKU) > $lama AND KETERANGANAJU='".$ket."'";
$hasil = mysqli_query($koneksi, $query);

$query2 = "DELETE FROM sk_skck WHERE DATEDIFF(CURDATE(), BERLAKU_AJU) > $lama AND KETERANGAN_AJU='".$ket."'";
$hasil2 = mysqli_query($koneksi, $query2);

$query3 = "DELETE FROM sk_tempatusaha WHERE DATEDIFF(CURDATE(), BERLAKUTU) > $lama AND KETERANGAN='".$ket."'";
$hasil3 = mysqli_query($koneksi, $query3);

$query4 = "DELETE FROM sk_belumnikah WHERE DATEDIFF(CURDATE(), BERLAKUBN) > $lama AND KETERANGANBN='".$ket."'";
$hasil4 = mysqli_query($koneksi, $query4);

?>