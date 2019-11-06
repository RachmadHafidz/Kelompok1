<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Sabrang</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
			window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	<!-- Index-Page-CSS -->
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
	<!-- //Font-Awesome-File-Links -->
	<link rel="stylesheet" href="css/show.css" type="text/css" media="all">
	
	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	<!-- Google fonts -->
	<!-- sow/hide -->
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link rel="stylesheet" href="show.css">
  


</head>
<!-- //Head -->
<!-- Body -->

<body>

<section class="main">
	<div class="layer">
		
		<div class="bottom-grid">
			<div class="logo">
				<h1> <a href="#"><span class="fa fa-key"></span> SILAHKAN LOGIN!</a></h1>
			</div>
        </div>
        
		<?php 
        if(isset($_GET["login_error"])){
            echo "<script>alert('Username atau Password salah ');history.go(-1);</script>";
        }
        ?>
	<br/>

		<div class="content-w3ls">
			<div class="text-center icon">
				<img src="images/logo.png" width="150" height="150" />
				<center><p><font color="white">WARGA</font></p></center>
			</div>
			
			<div class="content-bottom">
				<form action="cek_login1.php" method="post">
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="NIK" id="text1" type="text" value="" placeholder="NIK" required>
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field-pass">
							<input name="PASSWORD" id="pass" class="password" type="PASSWORD" placeholder="Password">
							<span class="field-icon"><i id="icon" class="fa fa-eye-slash"></i></span>

						</div>
					</div>
					<div class="wthree-field">
						<button type="submit" class="btn">login</button>
                    </div>
                    <div class="wthree-field">
						<button type="button" class="btn"><a href="http://localhost/Kelompok1/rian/selasa/nyoba.html">Beranda</a></button>
					</div>
                    
				</form>
			</div>
		</div>
		<p>.</p>
		<div class="bottom-grid1">
			<div></div>
			<div class="copyright">
				<p>© 2019 Key. All rights reserved | Design by
					<a href="http://w3layouts.com">W3layouts</a>
				</p>
			</div>
		</div>
	</div>
	<script src="showpass.js"></script>
</section>
<script src="showpass.js"></script>

</body>
<!-- //Body -->
</html>
