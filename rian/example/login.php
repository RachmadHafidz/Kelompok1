<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
</head>
<body>

    <?php 
        if(isset($_GET["login_error"])){
            echo "<h1 style='color:red';>Username atau Password Salah</h1>";
        }
    ?>
      <h1>Login </h1>
      <form method="post" action="loginan.php">
        <p><input type="text" name="username" value="" placeholder="Name"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="LOGIN"></p>
      </form>
    </div>
  
</body>
</html> 