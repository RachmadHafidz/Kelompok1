<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
</head>
<body>
        
    <?php 
        if(isset($_GET["login_error"])){
            echo "<h3 style='color:red';>Email atau password salah</h3>";
        }
    ?>
      <h1>Login to Home</h1>
      <form method="post" action="ceklogin.php">
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

</body>
</html> 