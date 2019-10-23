<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username =="admin" AND $password=="iya")
    {
        $_SESSION["username"]=$username;
        header("location:nyoba2.php");
    }else{
        header("location:loginrin.php?login_error");
    }
?>