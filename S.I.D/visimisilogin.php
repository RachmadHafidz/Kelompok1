<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
<title>S.I.D Sabrang</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
 
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
      <style>

  #menu {height: 40px;}
    ul { 
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background:rgb(252, 137, 223);
        }
    li {
        float: right;
        }
    li a {
        display :block;
        color :rgb(0, 0, 0);
        text-align: center;
        padding: 15px;
        text-decoration: none;
        }

       
        .dropbtn 
        {
        background:none;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        }
        .dropbtn a{
          color: #f1f1f1;
          text-decoration: none;
        }
        .dropdown :hover{
          color:rgb(41, 41, 41);
          text-decoration: none;
        }
      
        .dropdown 
        {
        color:rgb(41, 41, 41);
        position: relative;
        display: inline-block;
        z-index:9999;
        }

        .dropdown-content 
        {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a 
        {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {
          background-color: #f1f1f1;
          color:rgb(41, 41, 41);
          text-decoration: none;
        }

        .dropdown:hover .dropdown-content { display: block; }

        .dropdown:hover .dropbtn {background-color: #ffffff;}

        .right {text-align:right;}

        body {background: rgb(255, 255, 255);}

        body {background: rgb(255, 255, 255);}
   

      

      </style>
    
    </head>
<body>

        <?php session_start(); ?>
	<div class="container-float">
		
      
      <nav class="navbar navbar-dark bg-dark justify-content-between"> <p><a><font class="navbar-brand" color="white"></a>Sistem Informasi Desa Sabrang</font></a></p>
        <p><font color="white">Jl. watu ulo no 1, Desa Sabrang, Kec. Ambulu, Kab. Jember , Kode Pos 68172</font></p>
       
       </div>
      
      <nav class="navbar navbar-dark bg-dark justify-content-between"> 
        <div class="topnav" id="myTopnav">
         
          <div class="dropdown">
            <button class="dropbtn" > <a href="beranda.php">Beranda</a>
              <i class="fa fa-caret-down"></i>
            </button>
        </div>
  
        <div class="dropdown">
          <button class="dropbtn" > <a href="profillogin.php">Profil Desa</a>
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="profillogin.php">Profil Desa</a>
            <a href="visimisilogin.php">Visi & Misi</a>
            <a href="mottologin.php">Motto</a>
            <a href="http://localhost/Kelompok1/S.I.D/crud/index1.php">Perangkat Desa</a>
            
          </div>
        </div> 
    
        <div class="dropdown">
          <button class="dropbtn" > <a href="berita1.php">Berita</a>
            <i class="fa fa-caret-down"></i>
          </button>
      </div>
    
      <div class="dropdown">
        <button class="dropbtn" > <a href="petunjuklogin.php">Petunjuk</a>
          <i class="fa fa-caret-down"></i>
        </button>
    </div>
    <div class="dropdown">
        <button class="dropbtn"><a href="#">Pelayanan</a>
          <i class="fa fa-caret-down"></i>
        </button>
        
        
        <div class="dropdown-content">
          <a href="#">Persyaratan</a>
          <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pelayanan Surat Domisili
              </button>
              <div class="dropdown-menu">
              <a href="http://localhost/Kelompok1/S.I.D/suratfix/formdomisili.php">Pribadi</a>
              <a href="#">Pengaju</a>
           </div>
           </div>
           <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pelayanan Surat Domisili
              </button>
              <div class="dropdown-menu">
              <a href="http://localhost/Kelompok1/S.I.D/suratfix/formskck.php">Pribadi</a>
              <a href="#">Pengaju</a>
           </div>
           </div>
           <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pelayanan Surat Domisili
              </button>
              <div class="dropdown-menu">
              <a href="http://localhost/Kelompok1/S.I.D/suratfix/formbelumnikah.php">Pribadi</a>
              <a href="#">Pengaju</a>
           </div>
           </div>
           <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pelayanan Surat Domisili
              </button>
              <div class="dropdown-menu">
              <a href="http://localhost/Kelompok1/S.I.D/suratfix/formtempatusaha.php">Pribadi</a>
              <a href="#">Pengaju</a>
           </div>
           </div>
        </div>
  </div>
  
   
      <div class="dropdown">
        <button class="dropbtn"><a href="#"><?php 
      echo "Hai, selamat datang ". $_SESSION['nama'];
    ?></a>
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <?php
      if($_SESSION['levelad'] == "Super Admin"){
        echo "<a href='homeadmin/index.php'>Halaman Admin</a>";
        }else if($_SESSION['levelad'] == "Admin"){
          echo "<a href='homeadmin/index.php'>Halaman Admin</a>";
        }else if($_SESSION['levelad'] == "Perangkat Desa"){
          echo "<a href='homeadmin/index.php'>Halaman Admin</a>";
        }else if($_SESSION['levelad'] == "Warga"){
          echo "<a href='#'>Profil</a>";
        }
        ?>
          <a href="logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar Dari Website?')">Logout</a>
        </div>
     
  </nav>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

  <div class="container mt-3">
        <div class="row">
          <!-- Sidebar -->
          
                <!-- Isi Content -->
                <div id="bg">
                <div class="col-md-15 mb-3">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="text-mono text-center">Visi & Misi</h4>
                    </div>
                          
                    <h2>VISI</h2>
                        <p>Terciptanya pelayanan dibidang pemerintahan yang kreativ,inovatif,guna mewujudkan masyarakat Desa Sabrang yang sejahtera lahir dan batin</p>


                    <h2>MISI</h2>
                       
                            <p>Misi yang diemban dalam mewujudkan visi tersebut adalah :</p>
                            <p>1. Meningkatkan kualitas pelayanan masyarakat.</p>
                            <p>2. Menggali potensi unggulan desa.</p>
                            <p>3. Pembangunan sarana dan prasarana yang memadai.</p>
                            <p>4. Pemberdayaan masyarakat, utamanya pengusaha Kecil , Menengah untuk menjadi sumber daya manusia yang mandiri.</p>
                            <p>5. Mewujudkan aparatur Pemerintahan Desa yang berfungsi melayani masyarakat secara Profesional ,efisien ,trasparan , dan Produktif dalam menyelenggarakan pemerintahan, dan pembangunan desa.</p>
                        
                        </div>
                      </div>
                    </div>
                  </div>
  </div>

              <!-- Footer -->
              <div class="footer-bottom">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-md-center">&copy; @copyright</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
</body>
</html>