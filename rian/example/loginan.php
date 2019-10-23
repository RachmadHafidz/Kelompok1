<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="ryan" AND $password=="yes")
    {
        $_SESSION["username"]=$username;
        header("location:template1.php");
    }else{
        header("location:template.html?login_error");
    }
?>