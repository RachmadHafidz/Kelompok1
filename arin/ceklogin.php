<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    if($email=="ariniarin.af@gmail.com" AND $password=="arin")
    {
        $_SESSION["email"]= $email;
        header("location:home.php");
    }else{
        header("location:login.php?login_error");
    }
?>