<?php
session_start();
if($_SESSION['status']==""){
    header('location:index.php?belum_login');
}

if(isset($_GET["simpam_error"])){
    echo "<script>alert('Terjadi Kesalahan, Tidak Dapat Menyimpan!!');history.go(-1);</script>";
}else if(isset($_GET["kosong"])){
    echo "<script>alert('Data Tidak Boleh Kosong!!');history.go(-1);</script>";
}else if(isset($_GET["sukses"])){
    echo "<script>alert('Berhasil Mangubah Password!!');history.go(-1);</script>";
}else if(isset($_GET["minim"])){
    echo "<script>alert('Minimal Password 5 karakter!!');history.go(-1);</script>";
}

function bulan_indo($tanggal){
    $bulan = array (
      1 =>   'Januari',
      'Februari',
      'Maret',
  'April',
  'Mei',
  'Juni',
  'Juli',
  'Agustus',
  'September',
  'Oktober',
  'November',
  'Desember'
);
      $pecahkan = explode('-', $tanggal);
      
      // variabel pecahkan 0 = tanggal
      // variabel pecahkan 1 = bulan
      // variabel pecahkan 2 = tahun
    
      return $bulan[ (int)$pecahkan[1] ] ;
}
function tgl_saja($tanggal){
      $pecahkan = explode('-', $tanggal);
      
      // variabel pecahkan 0 = tanggal
      // variabel pecahkan 1 = bulan
      // variabel pecahkan 2 = tahun
    
      return $pecahkan[2] ;
}
function tgl_indo($tanggal){
    $bulan = array (
      1 =>   'Januari',
      'Februari',
      'Maret',
  'April',
  'Mei',
  'Juni',
  'Juli',
  'Agustus',
  'September',
  'Oktober',
  'November',
  'Desember'
);
      $pecahkan = explode('-', $tanggal);
      
      // variabel pecahkan 0 = tanggal
      // variabel pecahkan 1 = bulan
      // variabel pecahkan 2 = tahun
    
      return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
?>
<?php include 'fungsi\config.php'; 
$rowArtikel  = detailArtikel($_GET['id']);
$rowKomentar = tampilKomentar($_GET['id']);

if(isset($_GET["gagal"])){
    echo "<script>alert('Tidak Dapat Menambahkan Komentar!!');history.go(-1);</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <<!-- Title -->
    <title>SID SABRANG</title>

<!-- Favicon -->
<link rel="icon" href="img/core-img/Jember.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>
    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Logout</h5>
                        <form action="logout.php" class="newsletterForm" method="post">
                            <p>Tekan tombol "Logout" Jika ingin keluar dari website.</p> 
                            <button type="submit" class="btn original-btn">Logout</button>
                            <button type="button" class="btn original-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Subscribe Modal -->
<div class="subscribe-newsletter-area">
        <div class="modal fade" id="ubahPass" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Ubah Password</h5>
                        <form action="simpanpass.php" class="newsletterForm" method="post">
                            <input type="password" name="pass1" placeholder="Password Baru" required>
                            <input type="password" name="pass2"  placeholder="Konfirmasi Password" required>
                            <input type="submit" class="btn original-btn" value="Ubah">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <?php
                                $data=tampilArtikelLimit(); foreach($data as $row):?>
                                    <li><a href="detailberitadesa.php?id=<?= $row['ID_ARTIKEL']?>"><?php echo $row['JUDUL_ARTIKEL'] ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Social Area -->
                    <div class="col-12 col-sm-4">
                        <div class="top-social-area">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12" align="center">
                        <a align="center" href="indexlogin.php" class="original-logo"><img align="center" width="12%" src="img/core-img/Jember.png" alt=""><h4 class="original-logo"><strong>Sistem Informasi Desa Sabrang</strong></h4><h6 class="original-logo">Jl. Watu Ulo No. 5a, Krajan, Sabrang, Ambulu, Kabupaten Jember, Jawa Timur, 68172</h6></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        
                        <div class="subscribe-btn">
                            <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">Logout</a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                            <ul>
                                    <li><a href="#">Hello <?php
                                            echo $_SESSION['nama']; ?></a>
                                            <ul class="dropdown">
                                                <?php
                                                if($_SESSION['levelad']=='Super Admin'){
                                                    echo "<li><a href='homeadmin/index.php'>Halaman Admin</a></li>";
                                                }if($_SESSION['levelad']=='Admin'){
                                                    echo "<li><a href='homeadmin/index.php'>Halaman Admin</a></li>";
                                                }if($_SESSION['levelad']=='Perangkat Desa'){
                                                    echo "<li><a href='homeadmin/index.php'>Halaman Admin</a></li>";
                                                }if($_SESSION['levelad']=='Penduduk'){
                                                    echo "<li><a href='profil.php'>Profil</a></li>";
                                                    echo "<li><a href='#' data-toggle='modal' data-target='#ubahPass'>Ubah Password</a></li>";
                                                    echo "<li><a href='riwayatsurat.php'>Riwayat Surat</a></li>";

                                                }
                                                ?>
                                            </ul>
                                    </li>
                                    <li><a href="indexlogin.php">Beranda</a></li>
                                    <li><a href="#">Profil Desa</a>
                                        <ul class="dropdown">
                                            <li><a href="profildesa.php">Profil Desa</a></li>
                                            <li><a href="motodesa.php">Motto</a></li>
                                            <li><a href="visimisidesa.php">Visi & Misi</a></li>
                                            <li><a href="strukturdesa.php">Struktur Desa</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="beritadesa.php">Berita</a></li>
                                    <li><a href="#">Pelayanan Surat</a>
                                        <ul class="dropdown">
                                            <li><a href="#">SK Domisili</a>
                                                <ul class="dropdown">
                                                <?php
                                                if($_SESSION['levelad']=='Penduduk'){
                                                    echo "<li><a href='formdomisili.php'>Pribadi</a></li>
                                                    <li><a href='fdom.php'>Perwakilan</a></li>";
                                                }else{
                                                    echo "<li><a href='fdom.php'>Perwakilan</a></li>";
                                                }
                                                ?>     
                                                </ul>
                                            </li>
                                            <li><a href="#">SK SKCK</a>
                                                <ul class="dropdown">
                                                <?php
                                                if($_SESSION['levelad']=='Penduduk'){
                                                    echo "<li><a href='formskck.php'>Pribadi</a></li>
                                                    <li><a href='fskck.php'>Perwakilan</a></li>";
                                                }else{
                                                    echo "<li><a href='fskck.php'>Perwakilan</a></li>";
                                                }
                                                ?> 
                                                </ul>
                                            </li>
                                            <li><a href="#">SK Belum Nikah</a>
                                                <ul class="dropdown">
                                                <?php
                                                if($_SESSION['levelad']=='Penduduk'){
                                                    echo "<li><a href='formbnikah.php'>Pribadi</a></li>
                                                    <li><a href='fbnikah.php'>Perwakilan</a></li>";
                                                }else{
                                                    echo "<li><a href='fbnikah.php'>Perwakilan</a></li>";
                                                }
                                                ?> 
                                                </ul>
                                            </li>
                                            <li><a href="#">SK Tempat Usaha</a>
                                                <ul class="dropdown">
                                                <?php
                                                if($_SESSION['levelad']=='Penduduk'){
                                                    echo "<li><a href='formtusaha.php'>Pribadi</a></li>
                                                    <li><a href='ftusaha.php'>Perwakilan</a></li>";
                                                }else{
                                                    echo "<li><a href='ftusaha.php'>Perwakilan</a></li>";
                                                }
                                                ?> 
                                                </ul>
                                            </li>
                                        </ul>
                                    </li><li><a href="#">Petunjuk</a>
                                        <ul class="dropdown">
                                            <li><a href="petunjukwarga2.php">Petunjuk Website</a></li>
                                            <li><a href="petunjuksurat2.php">Petunjuk Surat</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tentangdesa.php">Tentang Kami</a></li>
                                </ul>

                                <!-- Search Form  -->
                                <div id="search-wrapper">
                                    <form action="#">
                                        <input type="text" id="search" placeholder="Search something...">
                                        <div id="close-icon"></div>
                                        <input class="d-none" type="submit" value="">
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">

        <!-- Single Blog Area  -->
        <div class="breadcumb-area bg-img" style="background-image: url(homeadmin/images/<?= $rowArtikel['FOTO_ARTIKEL'] ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag"><?= $rowArtikel['ID_KATEGORI'] ?></a>
                            <h4><a href="#" class="post-headline mb-0"><?= $rowArtikel['JUDUL_ARTIKEL'] ?></a></h4>
                            <div class="post-meta mb-50">
                                <p>By <a href="#"><?= $rowArtikel['ID_ADMIN'] ?></a></p>
                                <p>Date <?= tgl_indo($rowArtikel['TANGGAL_ARTIKEL']) ?></p><br>
                                <p><?= jumlahKomentar($rowArtikel['ID_ARTIKEL'])?> comments</p>
                            </div>
                            <p><?= $rowArtikel['ISI_ARTIKEL'] ?></p>
                        </div>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <h5 class="title">Komentar</h5>

                        <ol>
                        <li class="single_comment_area">
                        <?php foreach ($rowKomentar as $row): ?>
                            <!-- Single Comment Area -->
                            
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/blog-img/userr.png" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date"><?= $row['WAKTU_KMN'] ?></a>
                                        <p><a href="#" class="post-author"><?= $row['NAMA_KMN'] ?></a></p>
                                        <p><?= $row['ISI_KMN'] ?></p>
                                    </div>
                                </div>
                                <?php endforeach ?>
                        </li>
                        </ol>
                    </div>

                    <div class="post-a-comment-area mt-70">
                        <h5>Tinggalkan Komentar</h5>
                        <!-- Reply Form -->
                        <form action="tambahkmn.php?id=<?= $rowArtikel['ID_ARTIKEL'] ?>" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" value="<?php
                                            echo $_SESSION['nama']; ?>" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="isi" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Comment</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn original-btn" name="btnkomen">Komentar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

    

                <!-- ##### Sidebar Area ##### -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <form action="#" class="search-form">
                                <input type="search" name="search" id="searchForm" placeholder="Search">
                                <input type="submit" value="submit">
                            </form>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Latest Posts</h5>
                            
                            <div class="widget-content">
                            <?php $data=tampilArtikelLimit(); foreach($data as $row):

                            ?>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="homeadmin/images/<?php echo $row['FOTO_ARTIKEL'] ?>" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-tag"><?php echo $row['ID_KATEGORI'] ?></a>
                                        <h4><a href="detailberitadesa.php?id=<?= $row['ID_ARTIKEL']?>" class="post-headline"><?php echo $row['JUDUL_ARTIKEL'] ?></a></h4>
                                        <div class="post-meta">
                                            <p><a href="#"><?php echo tgl_indo($row['TANGGAL_ARTIKEL']) ?></a></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->

   
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Nav Area -->
                    <div class="classy-nav-container breakpoint-off">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-center">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">travel</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                    <!-- Footer Social Area -->
                    <div class="footer-social-area mt-30">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>