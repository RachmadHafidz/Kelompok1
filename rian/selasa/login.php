<?php 
include 'config.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/nyoba2.php");
}else{
	header("location:nyoba2.php");	
}
 
?>




<?php 
mysql_connect('localhost','root','');
mysql_select_db('akademik');
?>
