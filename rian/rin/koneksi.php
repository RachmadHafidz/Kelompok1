<?php 
$koneksi = mysqli_connect("localhost","root","","ddesa");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>