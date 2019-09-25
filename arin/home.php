<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
</head>
<body>
<h1>HOME</h1>
</body>
<body>
<?php
   ob_start();
    session_start();
     ob_end_clean();
    if(isset($_SESSION["email"])){
    echo "<h2>Selamat Anda Berhasil Login</h2> <h3>Klik Logout Dibawah Ini";
    echo "<a href='logout.php'><h4>Logout</h4></a>";
    }else{
        echo header("location:login.php");
    }
?> 
</body>
</html>
