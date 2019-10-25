<!DOCTYPE html>
<html>
<head>
<script src="pop.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
<title>Sistem Informasi Desa Sabrang</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <style>
   
  .dropbtn {
  background: none;
  color: rgb(0, 0, 0);
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  z-index:9999;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}


</style>
</head>
<body>

  
	<div class="container-float">
		
        
      <nav class="navbar navbar-dark bg-dark justify-content-between"> <p><a><font class="navbar-brand" color="white">Sistem Informasi Desa Sabrang</font></a></p>
        <p><font color="white">Jl. watu ulo no 1, Desa Sabrang, Kec. Ambulu, Kab. Jember , Kode Pos 68172</font></p>
        <a href="nyoba.html">Logout</a>
 
      </nav>
</div>
<nav class="navbar navbar-dark bg-dark justify-content-between"> 
      <div class="topnav" id="myTopnav">
       
        <div class="dropdown">
          <button class="dropbtn" > <a href="nyoba.html">Beranda</a>
            <i class="fa fa-caret-down"></i>
          </button>
      </div>

      <div class="dropdown">
        <button class="dropbtn" > <a href="profil.html">Profil Desa</a>
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="profil.html">Profil Desa</a>
          <a href="visi&misi">Visi & Misi</a>
          <a href="motto">Motto</a>
          <a href="http://localhost/Kelompok1/rian/selasa/crud/index1.php">Perangkat Desa</a>
          
        </div>
      </div> 
  
      <div class="dropdown">
        <button class="dropbtn" > <a href="profil.html">Berita</a>
          <i class="fa fa-caret-down"></i>
        </button>
    </div>
  
    <div class="dropdown">
      <button class="dropbtn" > <a href="#">Petunjuk</a>
        <i class="fa fa-caret-down"></i>
      </button>
  </div>
 
  
  <div class="dropdown">
        <button class="dropbtn"><a href="#">Pelayanan</a>
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="#">Persyaratan</a>
          <a href="#">Surat Pengantar-Akta Kelehiran</a>
          <a href="#">Surat Pengantar-Kartu Keluarga</a>
          <a href="#">Surat Pengantar-Kartu Tanda Penduduk</a>
          <a href="#">Surat Pengantar-Surat Nikah</a>
          <a href="#">Surat Pengantar-Pindah Tempat</a>
          <a href="#">Surat Pengantar-Surat Keterangan Catatan Kepolisian</a>
        </div>
      </div> 
     
 
 
      <?php 
include 'config.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login

 
// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];
 
?>
<br/>
<br/>


    
  
     
         
    
  
        </nav>  
     <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="hhh.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Kemajuan Desa</h3>
        <p>Pembangunan dimana mana</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="desa.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Perkembangan Teknologi</h3>
        <p>Paknya sudah ngerti basis data </p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="Webp.net-compress-image (1).jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Warga Desa</h3>
        <p>Desa sabrang memiliki warga yang intelek</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
        
	<!-- /.navbar-collapse -->
	</div>
</nav>
<div class="container mt-3">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">
                <h4 class="text-mono text-center">Arsip</h4>
              </div>
              <div class="card-body">
              
                <br />
                <blockquote class="card-blockquote">
                        <p><a href="summon.html">1. Daftar Wisata Desa</a></p>
                        <p><a href="http://localhost/Kelompok1/rian/selasa/crudwarga/index.php">2. Daftar Warga</a></p>
                       <p> <a href="summon.html">3. DUAR</a></p>
                </blockquote>
              </div>
            </div>
            <div class="card mb-3">
                  <div class="card-header">
                    <h4 class="text-mono text-center">PETA SABRANG</h4>
                  </div>
                 
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63151.28001653562!2d113.5569547719641!3d-8.406080534825929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69d3c69bb5e09%3A0xa99f72fcbbce8000!2sSabrang%2C%20Ambulu%2C%20Jember%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1572019975063!5m2!1sen!2sid" width="350" height="320" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                      <div class="card-body">
                        <img src="deluge.png" style="height: 110px;" class="mx-auto d-block">
                        <br />
                        <blockquote class="card-blockquote">
                          <p class="text-center">KALO MAU PAKE GAMBAR</p>
                        </blockquote>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- Isi Content -->
                <div class="col-md-8 mb-3">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="text-mono text-center">Artikel</h4>
                    </div>
                    <div class="card-body">
                      <img style="float:left;" src="deluge.png" class="img mr-3" height="42" width="42" />
                      <h5 class="card-title">artikel 1</h5>
                      <small><p>20 oktober 2019</p></small>
                      <p class="card-text">desa sabrang adalah <a href="summon.html">lanjut baca</a>
                      </p>
                    </div>
                    <div class="card-body">
                      <img style="float:left;" src="deluge.png" class="img mr-3" height="42" width="42"/>
                      <h5 class="card-title">artikel 2</h5>
                      <small><p>20 oktober 2019</p></small>
                      <p class="card-text">wisata desa sabrang ada banyak. <a href="summon.html">lanjut baca</a>
                      </p>
                  </div>
                  <div class="card-body">
                      <img style="float:left;" src="deluge.png" class="img mr-3" height="42" width="42"/>
                      <h5 class="card-title">artikel 3</h5>
                      <small><p>20 oktober 2019</p></small>
                      <p class="card-text">papuma merupakan bla bla <a href="summon.html">lanjut baca</a>
                      </p>
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