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
      
  #card iframe {float: left; margin: 10px;}
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
   

      

      </style>
    
    </head>
<body>
<?php session_start();?>
  
	<div class="container-float">
		
      
      <nav class="navbar navbar-dark bg-dark justify-content-between"> <p><a><font class="navbar-brand" color="white"></a>Sistem Informasi Desa Sabrang</font></a></p>
        <p><font color="white">Jl. watu ulo no 1, Desa Sabrang, Kec. Ambulu, Kab. Jember , Kode Pos 68172</font></p>
   
        
       </div>
      
       <nav class="navbar navbar-dark bg-dark justify-content-between"> 
      <div class="topnav" id="myTopnav">
       
        <div class="dropdown">
          <button class="dropbtn" > <a href="index1.php">Beranda</a>
            <i class="fa fa-caret-down"></i>
          </button>
      </div>

      <div class="dropdown">
        <button class="dropbtn" > <a href="profillogin.php">Profil Desa
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
  </div>  
<br/>
<br/>

</nav>

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
        <img class="d-block w-100" src="profil4.jpg" style="height: 600px;"
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
        <img class="d-block w-100" src="profil8.jpg" style="height: 600px;"
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
        <img class="d-block w-100" src="sabrang.jpg" style="height: 600px;"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Warga Desa</h3>
        <p>Desa sabrang memiliki warga yang intelek</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="profil2.jpg" style="height: 600px;"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Jiwa - jiwa</h3>
        <p>yang santuy</p>
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

<div class="container mt-3">
        <div class="row">
          <!-- Sidebar -->
          
                <!-- Isi Content -->

                
                <div class="col-md-15 mb-3">
                  <div class="card">
                  <div id="card">
                    <div class="card-header">
                      <h4 class="text-mono text-center">Profil Desa Sabrang</h4>
                    </div>
                      
                    <h2>A. Pendahuluan</h2>
                        <p style="text-indent: 20px; text-align: justify; margin-left: 10px; margin-right: 10px;" > Dengan memanjatkan Puji Syukur kehadirat Tuhan Yang Maha Esa, atas limpahan Rahmat dan Hidayah-Nya, sehingga kami dapat menyelesaikan penyusunan selanyang pandang tentang Potensi Desa Sabrang Kecamatan Ambulu Kabupaten Jember dalam rangka perlombaan Desa dan  di Kabupaten Jember Tahun 2014.
                          Penyelenggaraan pemerintahan dan pelaksanaan pembangunan yang selama ini dilaksanakan di desa Sabrang, telah memberikan hasil-hasil nyata yang cukup menggembirakan, walaupun disana-sini masih ditemui adanya kekurangan yang perlu mendapat koreksi serta upaya untuk mengatasi keberhasilan tersebut dapat dicapai berkat kerjasama yang baik antara Kepala Desa, Perangkat Desa, BPD, LPM dan intansi terkait serta partisipasi langsung dari masyarakat Desa Sabrang.</p>
                        <p style= "margin-left: 10px; margin-right: 10px;">Demikian selayang pandang ini disusun dalam rangka untuk memberikan gambaran Potensi Desa Sabrang dan Pelaksanaan kegiatan yang telah dilakukan di Desa Sabrang.</p>
                    <h2>B. Gambaran Umum Desa</h2>
                        <h3>1.Kondisi Geografis</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63151.28001653562!2d113.5569547719641!3d-8.406080534825929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69d3c69bb5e09%3A0xa99f72fcbbce8000!2sSabrang%2C%20Ambulu%2C%20Jember%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1572019975063!5m2!1sen!2sid"width="350" height="320" frameborder="20" style="border:0;" allowfullscreen=""> 
                            </iframe>
                           <p style="margin-top: 0px; text-indent: 20px; text-align: justify; margin-left: 10px; margin-right: 10px;" >
                            Desa Sabrang adalah desa yang termasuk kategori desa swasembada, swakarya, swamadya di wilayah kecamatan Ambulu Kabupaten Jember. Swasembada dapat diartikan desa yang kondisinya lebih baik dari beberapa desa yang lain. Swakarya  sering juga disebut desa peralihan antara desa swadaya dan dan desa swasembada.
                            Desa Swakarya memiliki ciri seperti adat-istiadatnya masih dijalankan tetapi sudah tidak mengikat lagi, sudah mulai beradaptasi dengan teknologi dan peralatan canggih dan tidak tersiolasi seperti halnya desa swadaya.</p>
                            <p style="text-indent: 20px; text-align: justify; margin-left: 10px; margin-right: 10px;">Swadaya sendiri artinya desa yang masih memiliki berbagai situasi yang terbatas seperti eduduk yang jarang, peri kehidupan yang masih terikat dengan adat-istiadat, lembaga-lembaga masyarakatnya masih sangat sederhana dan tingkat pendidikan warganya masih sangat rendah. 
                            Kegiatan ekonomi penduduknya masih bergantung dengan alam seperti bertani. 
                            dan terletak ke arah selatan + 5 Km dari ibu kota kecamatan yang memiliki luasn desa + 1.120,208 Ha. Dengan struktur tanah yang subur dengan  ketinggian 15 m dari permukaan air laut. yang terdiri dari lima dusun  yakni : Dusun Kebonsari ,Dusun Krajan , Dusun Tegalrejo, Dusun Jatirejo Dan Dusun Ungkalan. Dengan luas dan batas wilayah ; 1.120,208 Ha.  
                            Dengan batas-batas yang tertera dibawah ini:</p>
                            <p style= "margin-left: 10px; margin-right: 10px;">a. sebelah selatan berbatasan dengan desa sumberrejo kec. Ambulu</p>
                            <p style= "margin-left: 10px; margin-right: 10px;">b. sebelah barat berbatasan dengan desa lojejer Kec. Wuluhan</p>
                            <p style= "margin-left: 10px; margin-right: 10px;">c. sebelah utara berbatasan dengan desa desa Tegal sari kec. Ambulu  dan desa kesilir kec. Wuluhan.</p>
                            <p style= "margin-left: 10px; margin-right: 10px;">d. sebelah timur berbatasan dengan desa Andongsari Kec. Ambulu</p>
                        <h3>2. Potensi Sumberdaya Manusia</h3>
                            <p style="text-indent: 20px; text-align: justify; margin-left: 10px; margin-right: 10px;">Sebagaimana kita ketahui pertumbuhan penduduk adalah merupakan persoalan yang tidak kalah pentingnya dari masalah yang lain. Dimana pertumbuhannya sangat cepat dan pesat. Di Desa Sabrang hal ini dilihat dari jumlah penduduk Desa seluruhnya 14.577 Jiwa, dimana mayoritas suku Jawa.</p>

                    <H2>C. Beberapa Indikator Potensi Desa Sabrang</H2>
                        <h3>1. Indikator Pendidikan</h3>
                        <br>
                            <P><b>A. Komposisi penduduk menurut pendidikan</b></P>
                                <p style= "margin-left: 10px; margin-right: 10px;">Buta Huruf                       0          Jiwa</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Belum Sekolah                 2345          Jiwa</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Tidak Tamat SD                   0          Jiwa</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Tamat SD/Sederajat            1290          Jiwa</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Tamat SMP/Sederajat           2157          Jiwa</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Tamat SLTA/Sederajat          3146          Jiwa</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Tamat Perguruan Tinggi SI       68          Jiwa</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Tamat Pasca Sarjana              5          Jiwa</p>

                            <p> <b>B. Perkembangan Pendidikan</b></p>
                                <p style="text-indent: 20px; text-align: justify; margin-left: 10px; margin-right: 10px; ">Pendidikan baik formal maupun non formal sudah cukup maju didesa Sabrang hal ini dapat dilihat dari jumlah siswa mulai dari SD/MI, SMP/MTs, SMA/MA sampai dengan Perguruan Tinggi setiap tahunnya mengalami peningkatan baik kualitas maupun kuantitas. Terbukti ada beberapa siswa baik tingkat SD/MI sampai dengan SMA/MA yang meraih prestasi dibidang akademis maupun ekstrakurikuler ditingkat kabupaten maupun provinsi yang berasal dari desa Sabrang.</p>
                            <p><b>C. Sarana Pendidikan</b></p>
                                <p  style="text-indent: 20px; text-align: justify; margin-left: 10px; margin-right: 10px;">Pendidikan Anak Usia dini / PAUD di Desa Sabrang sudah terbentuk dibeberapa Dusun, yaitu :</p>
                            <p style= "margin-left: 10px; margin-right: 10px;"> Kebonsari 1 (satu) tempat (Nusa Indah 36)</p>
                            <p style= "margin-left: 10px; margin-right: 10px;"> Jatirejo 1 (satu) tempat (Nusa Indah 53)</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Kemudian Sarana pendidikan Taman Kanak-Kanak (TK) dan Sekolah Dasar (SD) cukup memadai baik sarana maupun prasarana.</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Sarana pendidikan SMP/MTs maupun SMA/MA swasta yang rata-rata cukup baik dan memadai.</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Adapun pendidikan Non Formal yang bertujuan meningkatkan Iman dan Taqwa antara lain, TPQ 13 Lembaga dan Pondok Pesantren 6 Lembaga.</p>
                            <p><b>D. Olahraga</b></p>
                                <p  style="text-indent: 20px; text-align: justify; margin-left: 10px; margin-right: 10px">Bidang olahraga di Desa Sabrang sangat potensial, hal ini dapat kami laporkan bahwa :</p>  
                                    <p style= "margin-left: 10px; margin-right: 10px;">Sepak Bola</p>
                                    <p style= "margin-left: 10px; margin-right: 10px;">Bola Voly</p>
                                    <p style= "margin-left: 10px; margin-right: 10px;">Pencak Silat</p>
                                    <p style= "margin-left: 10px; margin-right: 10px;">Bulu Tangkis</p>
                                    <p>Tenis Meja</p>
                                <p  style="text-indent: 20px; text-align: justify; margin-left: 10px; margin-right: 10px">Namun dari potensi yang ada, sampai saat ini masih belum diadakan pembinaan secara rutin sehingga masing-masing jenis olahraga yang ada masih belum menunjukkan potensinya secara maksimal.</p>
                                    <p style= "margin-left: 10px; margin-right: 10px;">Langkah - langkah yang akan dan telah dilakukan pemerintah desa antara lain :</p>
                                <p style= "margin-left: 10px; margin-right: 10px;"> Mengadakan pembinaan kepada pengurus cabang olahraga.</p>
                                <p style= "margin-left: 10px; margin-right: 10px;"> Membangun/ memperbaiki sarana dan prasarana olahraga</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Membantu dana untuk kegiatan latih tanding.</p>
                            <p><b>E. Karang Taruna</b></p>
                                <p  style="text-indent: 20px; text-align: justify; margin-left: 10px; margin-right: 10px">Untuk mewujudkan dan menciptakan pemuda berkualitas, kreatif dan mandiri, Desa Sabrang sudah membentuk Karang Taruna yang terletak di Kantor Desa Sabrang.</p>
                                <p style= "margin-left: 10px; margin-right: 10px;">Langkah yang telah dilakukan pemerintah desa :</p>
                                    <p style= "margin-left: 10px; margin-right: 10px;">1.      Mengikutkan kursus di tingkat Kecamatan dan Kabupaten</p>
                                    <p style= "margin-left: 10px; margin-right: 10px;">2.      Diusulkan untuk mendapat bantuan sarana dan prasarana yang akan dibutuhkan dalam kegiatan / programnya</p>
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