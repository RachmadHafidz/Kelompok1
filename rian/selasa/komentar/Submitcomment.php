<?php
if($_POST["tombol"]=="Kirim")
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$website=$_POST["website"];
$komentar=$_POST["komentar"];
$art_id=$_POST["art_id"];
$art_url=$_POST["art_url"];
if(empty($nama))
$_POST["nama"]='anonymous';
if(empty($komentar)){
echo "<meta http-equiv='refresh' content='2; url=$art_url'>";
die("komentar harus diisi");}
}
$con=mysql_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
mysql_select_db("db_desa2", $con);
$sql="INSERT INTO comment (nama, email, website, komentar, art_id, art_url,
date)
VALUES
('$_POST[nama]','$_POST[email]','$_POST[website]', '$_POST[komentar]',
'$_POST[art_id]', '$_POST[art_url]', NOW())";
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
echo "<meta http-equiv='refresh' content='0; url=$art_url'>";
mysql_close($con);
?>