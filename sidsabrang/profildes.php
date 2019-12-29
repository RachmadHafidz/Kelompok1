<?php 
include 'fungsi\config.php';
include 'koneksi.php';
session_start();
if(isset($_SESSION['nik/id'])){
    header('location:indexlogin.php');
}
if(isset($_GET["login_error"])){
    echo "<script>alert('Username atau Password salah ');history.go(-1);</script>";
}else if(isset($_GET["tidak_valid"])){
    echo "<script>alert('Status Akun Tidak Aktif! Silahkan mengaktifkan akun terlebih dahulu pada Admin.');history.go(-1);</script>";
}else if(isset($_GET["akses_gagal"])){
    echo "<script>alert('Akun tidak dapat Mengakses! Level Anda tidak sesuai untuk dapat mengakses.');history.go(-1);</script>";
}else if(isset($_GET["belum_login"])){
    echo "<script>alert('Anda belum Login, Silahkan Login Terlebih Dahulu!!');history.go(-1);</script>";
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

    <!-- Title -->
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
        <div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Login Sebagai</h5>
                        <div class="subscribe-btn" align="center">
                            <input type="button" href="#" class="btn original-btn" data-toggle="modal" data-target="#subsModal" value="Perangkat Desa">
                            <br><br><input type="button" href="#" class="btn original-btn" data-toggle="modal" data-target="#subsModal1" value="Penduduk">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Login Perangkat Desa</h5>
                        <form action="cek_login.php" class="newsletterForm" method="post">
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password"  placeholder="Password">
                            <input type="submit" class="btn original-btn" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Subscribe Modal -->
     <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal1" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Login Penduduk</h5>
                        <form action="cek_login1.php" class="newsletterForm" method="post">
                            <input type="text" name="NIK_PENDUDUK" placeholder="NIK">
                            <input type="password" name="PASSPEN"  placeholder="Password">
                            <input type="submit" class="btn original-btn" value="Login">
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
                                    <li><a href="detailberita.php?id=<?= $row['ID_ARTIKEL']?>"><?php echo $row['JUDUL_ARTIKEL'] ?></a></li>
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
                        <a align="center" href="index.php" class="original-logo"><img align="center" width="12%" src="img/core-img/Jember.png" alt=""><h4 class="original-logo"><strong>Sistem Informasi Desa Sabrang</strong></h4><h6 class="original-logo">Jl. Watu Ulo No. 1, Desa Sabrang, Kec. Ambulu, Kab. Jember, Jawa Timur, 68172</h6></a>
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
                            <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#logModal">Login</a>
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
                                    <li><a href="index.php">Beranda</a></li>
                                    <li><a href="#">Profil Desa</a>
                                        <ul class="dropdown">
                                            <li><a href="profildes.php">Profil Desa</a></li>
                                            <li><a href="moto.php">Motto</a></li>
                                            <li><a href="visimisi.php">Visi & Misi</a></li>
                                            <li><a href="struktur.php">Struktur Desa</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="berita.php">Berita</a></li>
                                    <li><a href="#">Petunjuk</a>
                                        <ul class="dropdown">
                                            <li><a href="petunjukwarga.php">Petunjuk Website</a></li>
                                            <li><a href="petunjuksurat.php">Petunjuk Surat</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tentang.php">Tentang Kami</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->


    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/sabrang.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>profil desa</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100-0 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">About</a>
                            <h4><a href="#" class="post-headline">Pendahuluan</a></h4>
                            <p class="mb-3" align="justify">Dengan memanjatkan Puji Syukur kehadirat Tuhan Yang Maha Esa, atas limpahan Rahmat dan Hidayah-Nya, sehingga kami dapat menyelesaikan penyusunan selanyang pandang tentang Potensi Desa Sabrang Kecamatan Ambulu Kabupaten Jember dalam rangka perlombaan Desa dan  di Kabupaten Jember Tahun 2014. Penyelenggaraan pemerintahan dan pelaksanaan pembangunan yang selama ini dilaksanakan di desa Sabrang, telah memberikan hasil-hasil nyata yang cukup menggembirakan, walaupun disana-sini masih ditemui adanya kekurangan yang perlu mendapat koreksi serta upaya untuk mengatasi keberhasilan tersebut dapat dicapai berkat kerjasama yang baik antara Kepala Desa, Perangkat Desa, BPD, LPM dan intansi terkait serta partisipasi langsung dari masyarakat Desa Sabrang.<br><br> Demikian selayang pandang ini disusun dalam rangka untuk memberikan gambaran Potensi Desa Sabrang dan Pelaksanaan kegiatan yang telah dilakukan di Desa Sabrang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-catagory-area clearfix">
                        <div class="map-area">
                            <iframe class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63151.28001653562!2d113.5569547719641!3d-8.406080534825929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69d3c69bb5e09%3A0xa99f72fcbbce8000!2sSabrang%2C%20Ambulu%2C%20Jember%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1572019975063!5m2!1sen!2sid" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
       
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-area clearfix">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Gambaran Umum Desa (1)</a>
                            <h4><a href="#" class="post-headline">Kondisi Geografis</a></h4>
                            <p class="mb-3" align="justify"> Desa Sabrang adalah desa yang termasuk kategori desa swasembada, swakarya, swamadya di wilayah kecamatan Ambulu Kabupaten Jember. Swasembada dapat diartikan desa yang kondisinya lebih baik dari beberapa desa yang lain. Swakarya  sering juga disebut desa peralihan antara desa swadaya dan dan desa swasembada.
                            Desa Swakarya memiliki ciri seperti adat-istiadatnya masih dijalankan tetapi sudah tidak mengikat lagi, sudah mulai beradaptasi dengan teknologi dan peralatan canggih dan tidak tersiolasi seperti halnya desa swadaya.
                            Swadaya sendiri artinya desa yang masih memiliki berbagai situasi yang terbatas seperti eduduk yang jarang, peri kehidupan yang masih terikat dengan adat-istiadat, lembaga-lembaga masyarakatnya masih sangat sederhana dan tingkat pendidikan warganya masih sangat rendah. 
                            Kegiatan ekonomi penduduknya masih bergantung dengan alam seperti bertani. 
                            dan terletak ke arah selatan + 5 Km dari ibu kota kecamatan yang memiliki luasn desa + 1.120,208 Ha. </p> 
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <p class="mb-3" align="justify">Dengan struktur tanah yang subur dengan  ketinggian 15 m dari permukaan air laut. yang terdiri dari lima dusun  yakni : Dusun Kebonsari ,Dusun Krajan , Dusun Tegalrejo, Dusun Jatirejo Dan Dusun Ungkalan. Dengan luas dan batas wilayah ; 1.120,208 Ha.  
                            Dengan batas-batas yang tertera dibawah ini:
                            <br>a. sebelah selatan berbatasan dengan desa sumberrejo kec. Ambulu
                            <br>b. sebelah barat berbatasan dengan desa lojejer Kec. Wuluhan
                            <br>c. sebelah utara berbatasan dengan desa desa Tegal sari kec. Ambulu  dan desa kesilir kec. Wuluhan.
                            <br>d. sebelah timur berbatasan dengan desa Andongsari Kec. Ambulu
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->
    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Gambaran Umum Desa (2)</a>
                            <h4><a href="#" class="post-headline">Potensi Sumberdaya Manusia</a></h4>
                            <p class="mb-3" align="justify">Sebagaimana kita ketahui pertumbuhan penduduk adalah merupakan persoalan yang tidak kalah pentingnya dari masalah yang lain. Dimana pertumbuhannya sangat cepat dan pesat. Di Desa Sabrang hal ini dilihat dari jumlah penduduk Desa seluruhnya 14.577 Jiwa, dimana mayoritas suku Jawa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->
    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Beberapa Indikator Potensi Desa Sabrang (1)</a>
                            <h4><a href="#" class="post-headline">Indikator Pendidikan</a></h4>
                            <h3><a href="#" class="post-headline">A. Komposisi penduduk menurut pendidikan</a></h3>
                            <p class="mb-3" align="justify">Sebagaimana kita ketahui pertumbuhan penduduk adalah merupakan persoalan yang tidak kalah pentingnya dari masalah yang lain. Dimana pertumbuhannya sangat cepat dan pesat. Di Desa Sabrang hal ini dilihat dari jumlah penduduk Desa seluruhnya 14.577 Jiwa, dimana mayoritas suku Jawa.
                                <br>a. Buta Huruf 0 Jiwa
                                <br>b. Belum Sekolah 2345 Jiwa
                                <br>c. Tidak Tamat SD 0 Jiwa
                                <br>d. Tamat SD/Sederajat 1290 Jiwa
                                <br>e. Tamat SMP/Sederajat 2157 Jiwa
                                <br>f. Tamat SLTA/Sederajat 3146 Jiwa
                                <br>g. Tamat Perguruan Tinggi SI 68 Jiwa
                                <br>h. Tamat Pasca Sarjana
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <h3><a href="#" class="post-headline">B. Perkembangan Pendidikan</a></h3>
                            <p class="mb-3" align="justify">Pendidikan baik formal maupun non formal sudah cukup maju didesa Sabrang hal ini dapat dilihat dari jumlah siswa mulai dari SD/MI, SMP/MTs, SMA/MA sampai dengan Perguruan Tinggi setiap tahunnya mengalami peningkatan baik kualitas maupun kuantitas. Terbukti ada beberapa siswa baik tingkat SD/MI sampai dengan SMA/MA yang meraih prestasi dibidang akademis maupun ekstrakurikuler ditingkat kabupaten maupun provinsi yang berasal dari desa Sabrang.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <h3><a href="#" class="post-headline">C. Sarana Pendidikan</a></h3>
                            <p class="mb-3" align="justify">Pendidikan Anak Usia dini / PAUD di Desa Sabrang sudah terbentuk dibeberapa Dusun, yaitu :
                                <br>a. Kebonsari 1 (satu) tempat (Nusa Indah 36)
                                <br>b. Jatirejo 1 (satu) tempat (Nusa Indah 53)
                                <br>c. Kemudian Sarana pendidikan Taman Kanak-Kanak (TK) dan Sekolah Dasar (SD) cukup memadai baik sarana maupun prasarana.
                                <br>d. Sarana pendidikan SMP/MTs maupun SMA/MA swasta yang rata-rata cukup baik dan memadai.
                                <br>e. Adapun pendidikan Non Formal yang bertujuan meningkatkan Iman dan Taqwa antara lain, TPQ 13 Lembaga dan Pondok Pesantren 6 Lembaga.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <h3><a href="#" class="post-headline">D. Olahraga</a></h3>
                            <p class="mb-3" align="justify">Bidang olahraga di Desa Sabrang sangat potensial, hal ini dapat kami laporkan bahwa :  
                                    <br>a. Sepak Bola
                                    <br>b. Bola Voly
                                    <br>c. Pencak Silat
                                    <br>d. Bulu Tangkis
                                    <br>e. Tenis Meja</p>
                            <p class="mb-3" align="justify">Namun dari potensi yang ada, sampai saat ini masih belum diadakan pembinaan secara rutin sehingga masing-masing jenis olahraga yang ada masih belum menunjukkan potensinya secara maksimal. Langkah-langkah yang akan dan telah dilakukan pemerintah desa antara lain :
                                <br>1. Mengadakan pembinaan kepada pengurus cabang olahraga.
                                <br>2. Membangun/ memperbaiki sarana dan prasarana olahraga.
                                <br>3. Membantu dana untuk kegiatan latih tanding.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <h3><a href="#" class="post-headline">E. Karang Taruna</a></h3>
                            <p class="mb-3" align="justify">Pendidikan Anak Usia dini / PAUD di Desa Sabrang sudah terbentuk dibeberapa Dusun, yaitu :
                                <br>a. Kebonsari 1 (satu) tempat (Nusa Indah 36)
                                <br>b. Jatirejo 1 (satu) tempat (Nusa Indah 53)
                                <br>c. Kemudian Sarana pendidikan Taman Kanak-Kanak (TK) dan Sekolah Dasar (SD) cukup memadai baik sarana maupun prasarana.
                                <br>d. Sarana pendidikan SMP/MTs maupun SMA/MA swasta yang rata-rata cukup baik dan memadai.
                                <br>e. Adapun pendidikan Non Formal yang bertujuan meningkatkan Iman dan Taqwa antara lain, TPQ 13 Lembaga dan Pondok Pesantren 6 Lembaga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <div class="cool-facts-area section-padding-100-0 bg-img background-overlay" style="background-image: url(img/bg-img/sawah.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-blog-area blog-style-2 text-center mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">About</a>
                            <h4><a href="#" class="post-headline">Selamat Datang di Website Kami</a></h4>
                            <p>Website Desa Sabrang ini dibuat untuk meningkatkan potensi Desa Sabrang.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter"><?php
                            include 'koneksi.php';
                            // Cara 3
                            $query = "SELECT * FROM penduduk";
                            $sql = mysqli_query($koneksi, $query);
                            $data = array();
                            while(($row = mysqli_fetch_array($sql)) != null){
                                $data[] = $row;
                            }
                            $count = count($data);
                            echo "$count";
                  ?></span></h2>
                        <p>Penduduk</p>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter"><?php
                            include 'koneksi.php';
                            // Cara 3
                            $query = "SELECT * FROM keluarga";
                            $sql = mysqli_query($koneksi, $query);
                            $data = array();
                            while(($row = mysqli_fetch_array($sql)) != null){
                                $data[] = $row;
                            }
                            $count = count($data);
                            echo "$count";

                            ?></span></h2>
                        <p>Keluarga</p>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter"><?php
                            include 'koneksi.php';
                            // Cara 3
                            $query = "SELECT * FROM admin WHERE LEVEL='Perangkat Desa'";
                            $sql = mysqli_query($koneksi, $query);
                            $data = array();
                            while(($row = mysqli_fetch_array($sql)) != null){
                                $data[] = $row;
                            }
                            $count = count($data);
                            echo "$count";

                            ?></span></h2>
                        <p>Perangkat Desa</p>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter"><?php
                            include 'koneksi.php';
                            // Cara 3
                            $query = "SELECT * FROM admin WHERE LEVEL='Admin'";
                            $sql = mysqli_query($koneksi, $query);
                            $data = array();
                            while(($row = mysqli_fetch_array($sql)) != null){
                                $data[] = $row;
                            }
                            $count = count($data);
                            echo "$count";

                            ?></span></h2>
                        <p>Admin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Cool Facts Area End ##### -->
    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5>About us @ Instagram</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slides -->
        <div class="instagram-slides owl-carousel">
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/1.jpg" style="height: 269px;width: 268px;" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="https://www.instagram.com/explore/locations/341653129888924/sabrang-ambulu/?hl=id" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/2.jpg" style="height: 269px;width: 268px;"alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="https://www.instagram.com/explore/locations/341653129888924/sabrang-ambulu/?hl=id" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/3.jpg" style="height: 269px;width: 268px;" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="https://www.instagram.com/explore/locations/341653129888924/sabrang-ambulu/?hl=id" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/4.jpg" style="height: 269px;width: 268px;" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="https://www.instagram.com/explore/locations/341653129888924/sabrang-ambulu/?hl=id" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/5.jpg" style="height: 269px;width: 268px;"alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="https://www.instagram.com/explore/locations/341653129888924/sabrang-ambulu/?hl=id" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/6.jpg" style="height: 269px;width: 268px;"alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="https://www.instagram.com/explore/locations/341653129888924/sabrang-ambulu/?hl=id" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/7.jpg" style="height: 269px;width: 268px;"alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="https://www.instagram.com/explore/locations/341653129888924/sabrang-ambulu/?hl=id" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Instagram Feed Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">

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