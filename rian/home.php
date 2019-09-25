<?php
   ob_start();
    session_start();
     ob_end_clean();
    if(isset($_SESSION["username"])){
        echo  $_SESSION ['username'];
    echo "<h3>ANDA TELAH LOGIN</h3>";
   
    echo "<h3>SELAMAT DATANG MAS</h3>";
    echo "<a href='logout.php'>Logout</a>";
    }else{
        echo header("location:login.php");
    }
?> 