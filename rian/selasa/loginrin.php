<!DOCTYPE html>
<html>
<head>
	<title>LOGIN ADMIN</title>
	<link rel="stylesheet" type="text/css" href="stylerin.css">
</head>
<body>


<h1>Login Admin</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		
        <?php 
        if(isset($_GET["login_error"])){
            echo "<script>alert('Username atau Password salah ');history.go(-1);</script>";
        }
        ?>
	<br/>
	<br/>

		<form method="post" action="login.php">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau Email">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="nyoba.html">KEMBALI</a>
			</center>
		</form>
		
	</div>


</body>
</html>