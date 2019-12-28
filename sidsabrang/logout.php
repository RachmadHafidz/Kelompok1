<?php 
session_start();
        $_SESSION["status"];
		$_SESSION["nik/id"];
		$_SESSION["nama"];
        $_SESSION["levelad"];
        
        unset($_SESSION["status"]);
		unset($_SESSION["nik/id"]);
		unset($_SESSION["nama"]);
        unset($_SESSION["levelad"]);

session_unset();
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location:index.php");
?>