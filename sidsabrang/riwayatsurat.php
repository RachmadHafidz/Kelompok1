<?php 
include 'fungsi\config.php';
session_start();
$nik=$_SESSION['nik/id'];
if($_SESSION['status']==""){
    header('location:index.php?belum_login');
}
include 'koneksi.php';
if(isset($_GET["simpam_error"])){
    echo "<script>alert('Terjadi Kesalahan, Tidak Dapat Menyimpan!!');history.go(-1);</script>";
}else if(isset($_GET["kosong"])){
    echo "<script>alert('Data Tidak Boleh Kosong!!');history.go(-1);</script>";
}else if(isset($_GET["sukses"])){
    echo "<script>alert('Berhasil Mangubah Password!!');history.go(-1);</script>";
}else if(isset($_GET["minim"])){
    echo "<script>alert('Minimal Password 5 karakter!!');history.go(-1);</script>";
}else if(isset($_GET["gagal"])){
    echo "<script>alert('Konfirmasi Password Harus Sama!!');history.go(-1);</script>";
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
                        <a align="center" href="indexlogin.php" class="original-logo"><img align="center" width="12%" src="img/core-img/Jember.png" alt=""><h4><strong>Sistem Informasi Desa Sabrang</strong></h4><h6>Jl. Watu Ulo No. 5a, Krajan, Sabrang, Ambulu, Kabupaten Jember, Jawa Timur, 68172</h6></a>
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
                                    </li>
                                    <li><a href="#">Petunjuk</a>
                                        <ul class="dropdown">
                                            <li><a href="petunjukwarga2.php">Petunjuk Website</a></li>
                                            <li><a href="petunjuksurat2.php">Petunjuk Surat</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tentangdesa.php">Tentang Kami</a></li>
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
    <div class="breadcumb-area bg-img" style="background-image: url(img/surat/surat.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>riwayat surat</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

        <!-- ##### Blog Wrapper Start ##### -->
        <div class="blog-wrapper section-padding-50-0 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content" align="center">
                            <div class="line"></div>
                            <a href="#" class="post-tag">About</a>
                            <h4><a href="#" class="post-headline">RIWAYAT SURAT PRIBADI</a></h4>
                            <p class="mb-3"><table class="table table-bordered" id="dataTable" border="1" width="100%" > 
                                    <thead>
                                        <tr> 
                                        <th>No Surat</th>
                                        <th>Nama Penduduk</th>
                                        <th>NIK Pribadi</th>
                                        <th>Tanggal Surat </th>
                                        <th>Tujuan Surat</th>
                                        <th>Keterangan Surat</th>
                                        <th>Cetak</th>
                                        </tr>
                                    <thead>
                                    <tfoot>
                                        <tr> 
                                        <th>No Surat</th>
                                        <th>Nama Penduduk</th>
                                        <th>NIK Pribadi</th>
                                        <th>Tanggal Surat </th>
                                        <th>Tujuan Surat</th>
                                        <th>Keterangan Surat</th>
                                        <th>Cetak</th>
                                        </tr>
                                    <tfoot>
                                <tr>
                                <td colspan = "8" > <b>Riwayat Surat Domisili untuk Pribadi</b> </td>
                                </tr>
                                <?php
                                
                                $set = "select penduduk.NAMAPEN, sk_domisili.NO_DOMISILI, sk_domisili.NIK_PENDUDUK, sk_domisili.TGLSURATAJU, sk_domisili.TUJUANAJU, sk_domisili.KETERANGANAJU, sk_domisili.JENIS_SURATAJU FROM penduduk, sk_domisili WHERE sk_domisili.NIK_PENDUDUK='$nik' AND sk_domisili.NIK_PENDUDUK = penduduk.NIK_PENDUDUK and sk_domisili.JENIS_SURATAJU = 'Surat Pribadi'"; // Query untuk menampilkan semua data siswa

                                $set1 = " select penduduk.NAMAPEN, sk_belumnikah.NO_BNIKAH, sk_belumnikah.NIK_PENDUDUK, sk_belumnikah.TGLSURATBN, sk_belumnikah.TUJUANBN, sk_belumnikah.KETERANGANBN, sk_belumnikah.JSBN FROM penduduk, sk_belumnikah WHERE sk_belumnikah.NIK_PENDUDUK = '$nik' and sk_belumnikah.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_belumnikah.JSBN ='Surat Pribadi' ";

                                $set2 = "select penduduk.NAMAPEN, sk_skck.NO_SKCK, sk_skck.NIK_PENDUDUK, sk_skck.TGLSURAT_AJU, sk_skck.TUJUAN_AJU, sk_skck.KETERANGAN_AJU, sk_skck.JENISURAT_AJU FROM penduduk, sk_skck WHERE sk_skck.NIK_PENDUDUK = '$nik' and sk_skck.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_skck.JENISURAT_AJU ='Surat Pribadi'";

                                $set3= "select penduduk.NAMAPEN, sk_tempatusaha.NO_TUSAHA, sk_tempatusaha.NIK_PENDUDUK, sk_tempatusaha.TGLSURATTU, sk_tempatusaha.TUJUANTU, sk_tempatusaha.KETERANGAN, sk_tempatusaha.JNSURAT FROM penduduk, sk_tempatusaha WHERE sk_tempatusaha.NIK_PENDUDUK = '$nik' and sk_tempatusaha.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_tempatusaha.JNSURAT ='Surat Pribadi'";

                                $play = mysqli_query($conn, $set); // Eksekusi/Jalankan query dari variabel $query
                                $play1 = mysqli_query($conn, $set1);
                                $play2 = mysqli_query($conn, $set2);
                                $play3 = mysqli_query($conn, $set3);
                                while($data = mysqli_fetch_array($play)){ // Ambil semua data dari hasil eksekusi $sql
                                    echo "<tr>";
                                    echo "<td>".$data['NO_DOMISILI']."</td>";
                                    echo "<td>".$data['NAMAPEN']."</td>";
                                    echo "<td>".$data['NIK_PENDUDUK']."</td>";
                                    echo "<td>".$data['TGLSURATAJU']."</td>";
                                    echo "<td>".$data['TUJUANAJU']."</td>";
                                    echo "<td>".$data['KETERANGANAJU']."</td>";
                                    
                                ?>
                                
                                <td><a class="btn btn-primary" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')" href="reportdomisili.php?nosur=<?php echo $data['NO_DOMISILI']?>&nik=<?php echo $data['NIK_PENDUDUK']?>">Cetak</a> </tr>
                                
                                <?php
                                }	
                                ?>
                                <tr>
                                    <td colspan = "8" > <b>Riwayat Surat Belum Nikah untuk Pribadi</b> </td>	
                                </tr>
                                    <?php
                                while($show = mysqli_fetch_array($play1)){
                                    echo "<tr>";
                                    echo "<td>".$show['NO_BNIKAH']."</td>";
                                    echo "<td>".$show['NAMAPEN']."</td>";
                                    echo "<td>".$show['NIK_PENDUDUK']."</td>";
                                    echo "<td>".$show['TGLSURATBN']."</td>";
                                    echo "<td>".$show['TUJUANBN']."</td>";
                                    echo "<td>".$show['KETERANGANBN']."</td>";
                                    ?>
                                
                                    <td><a class="btn btn-primary" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')" href="reportbnikah.php?nosur=<?php echo $show['NO_BNIKAH']?>&nik=<?php echo $show['NIK_PENDUDUK']?>">Cetak</a> </tr>
                                
                                <?php
                                }	
                                ?>

                                <tr>
                                <td colspan = "8" > <b> Riwayat Surat SKCK untuk Pribadi</b> </td>	
                                </tr>
                                <?php
                                while($show1 = mysqli_fetch_array($play2)){
                                    echo "<tr>";
                                    echo "<td>".$show1['NO_SKCK']."</td>";
                                    echo "<td>".$show1['NAMAPEN']."</td>";
                                    echo "<td>".$show1['NIK_PENDUDUK']."</td>";
                                    echo "<td>".$show1['TGLSURAT_AJU']."</td>";
                                    echo "<td>".$show1['TUJUAN_AJU']."</td>";
                                    echo "<td>".$show1['KETERANGAN_AJU']."</td>";
                                    
                                ?>
                                
                                    <td><a class="btn btn-primary" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')" href="reportskck.php?nosur=<?php echo $show1['NO_SKCK']?>&nik=<?php echo $show1['NIK_PENDUDUK']?>">Cetak</a> </tr>
                                
                                <?php
                                }	
                                ?>

                                <tr>
                                    <td colspan = "8" > <b> Riwayat Surat Tempat Usaha untuk Pribadi </b> </td>	
                                </tr>
                                <?php
                                while($show2 = mysqli_fetch_array($play3)){
                                    echo "<tr>";
                                    echo "<td>".$show2['NO_TUSAHA']."</td>";
                                    echo "<td>".$show2['NAMAPEN']."</td>";
                                    echo "<td>".$show2['NIK_PENDUDUK']."</td>";
                                    echo "<td>".$show2['TGLSURATTU']."</td>";
                                    echo "<td>".$show2['TUJUANTU']."</td>";
                                    echo "<td>".$show2['KETERANGAN']."</td>";
                                    ?>
                                
                                    <td><a class="btn btn-primary" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')" href="reportusaha.php?nosur=<?php echo $show2['NO_TUSAHA']?>&nik=<?php echo $show2['NIK_PENDUDUK']?>">Cetak</a> </tr>
                                
                                <?php
                                }	
                                ?>
                            </table>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

     <!-- ##### Blog Wrapper Start ##### -->
     <div class="blog-wrapper section-padding-30-0 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content" align="center">
                            <div class="line"></div>
                            <a href="#" class="post-tag">About</a>
                            <h4><a href="#" class="post-headline">RIWAYAT SURAT PERWAKILAN</a></h4>
                            <p class="mb-3"><table class="table table-bordered" id="dataTable" border="1" width="100%" > 
                                    <thead>
                                        <tr> 
                                        <th>No Surat</th>
                                        <th>Nama Penduduk</th>
                                        <th>NIK Pribadi</th>
                                        <th>Tanggal Surat </th>
                                        <th>NIK Pengaju</th>
                                        <th>Nama Pengaju</th>
                                        <th>Tujuan Surat</th>
                                        <th>Keterangan Surat</th>
                                        <th>Cetak</th>
                                        </tr>
                                    <thead>
                                    <tfoot>
                                        <tr> 
                                        <th>No Surat</th>
                                        <th>Nama Penduduk</th>
                                        <th>NIK Pribadi</th>
                                        <th>Tanggal Surat </th>
                                        <th>NIK Pengaju</th>
                                        <th>Nama Pengaju</th>
                                        <th>Tujuan Surat</th>
                                        <th>Keterangan Surat</th>
                                        <th>Cetak</th>
                                        </tr>
                                    <tfoot>
                               
                                <tr>
                                <td colspan = "8" > <b>Riwayat Surat Domisili untuk Perwakilan</b> </td>
                                </tr>

                                <?php
                                
                                $query = "select penduduk.NAMAPEN, sk_domisili.NO_DOMISILI, sk_domisili.NIK_PENDUDUK, sk_domisili.NIKAJU, sk_domisili.NAMAAJU, sk_domisili.TGLSURATAJU, sk_domisili.TUJUANAJU, sk_domisili.KETERANGANAJU, sk_domisili.JENIS_SURATAJU FROM penduduk, sk_domisili WHERE sk_domisili.NIK_PENDUDUK='$nik' AND sk_domisili.NIK_PENDUDUK = penduduk.NIK_PENDUDUK and sk_domisili.JENIS_SURATAJU = 'Surat Perwakilan'"; // Query untuk menampilkan semua data siswa

                                $query1 = " select penduduk.NAMAPEN, sk_belumnikah.NO_BNIKAH, sk_belumnikah.NIK_PENDUDUK, sk_belumnikah.NIKBN,sk_belumnikah.NAMABN, sk_belumnikah.TGLSURATBN, sk_belumnikah.TUJUANBN, sk_belumnikah.KETERANGANBN, sk_belumnikah.JSBN FROM penduduk, sk_belumnikah WHERE sk_belumnikah.NIK_PENDUDUK = '$nik' and sk_belumnikah.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_belumnikah.JSBN ='Surat Perwakilan' ";

                                $query2 = "select penduduk.NAMAPEN, sk_skck.NO_SKCK, sk_skck.NIK_PENDUDUK, sk_skck.NIK_AJU,sk_skck.NAMA_AJU, sk_skck.TGLSURAT_AJU, sk_skck.TUJUAN_AJU, sk_skck.KETERANGAN_AJU, sk_skck.JENISURAT_AJU FROM penduduk, sk_skck WHERE sk_skck.NIK_PENDUDUK = '$nik' and sk_skck.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_skck.JENISURAT_AJU ='Surat Perwakilan'";

                                $query3 = "select penduduk.NAMAPEN, sk_tempatusaha.NO_TUSAHA, sk_tempatusaha.NIK_PENDUDUK, sk_tempatusaha.NIKTU, sk_tempatusaha.NAMATU, sk_tempatusaha.TGLSURATTU, sk_tempatusaha.TUJUANTU, sk_tempatusaha.KETERANGAN, sk_tempatusaha.JNSURAT FROM penduduk, sk_tempatusaha WHERE sk_tempatusaha.NIK_PENDUDUK = '$nik' and sk_tempatusaha.NIK_PENDUDUK= penduduk.NIK_PENDUDUK AND sk_tempatusaha.JNSURAT ='Surat Perwakilan'";

                                $run = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
                                $run1 = mysqli_query($conn, $query1);
                                $run2 = mysqli_query($conn, $query2);
                                $run3 = mysqli_query($conn, $query3);
                                while($ex = mysqli_fetch_array($run)){ // Ambil semua data dari hasil eksekusi $sql
                                    echo "<tr>";
                                    echo "<td>".$ex['NO_DOMISILI']."</td>";
                                    echo "<td>".$ex['NAMAPEN']."</td>";
                                    echo "<td>".$ex['NIK_PENDUDUK']."</td>";
                                    echo "<td>".$ex['TGLSURATAJU']."</td>";
                                    echo "<td>".$ex['NIKAJU']."</td>";
                                    echo "<td>".$ex['NAMAAJU']."</td>";
                                    echo "<td>".$ex['TUJUANAJU']."</td>";
                                    echo "<td>".$ex['KETERANGANAJU']."</td>";
                                    
                                ?>
                                    <td><a class="btn btn-primary" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')" href="rdom.php?nosur=<?php echo $ex['NO_DOMISILI']?>&nik=<?php echo $ex['NIKAJU']?>">Cetak</a> </tr>
                                
                                <?php
                                }	
                                ?>

                                <tr>
                                <td colspan = "9" > <b>  Riwayat Surat Belum Nikah untuk Perwakilan </b></td>	
                                </tr>
                                <?php
                                while($show = mysqli_fetch_array($run1)){
                                    echo "<tr>";
                                    echo "<td>".$show['NO_BNIKAH']."</td>";
                                    echo "<td>".$show['NAMAPEN']."</td>";
                                    echo "<td>".$show['NIK_PENDUDUK']."</td>";
                                    echo "<td>".$show['TGLSURATBN']."</td>";
                                    echo "<td>".$show['NIKBN']."</td>";
                                    echo "<td>".$show['NAMABN']."</td>";
                                    echo "<td>".$show['TUJUANBN']."</td>";
                                    echo "<td>".$show['KETERANGANBN']."</td>";
                                ?>
                                    <td><a class="btn btn-primary" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')" href="rbnikah.php?nosur=<?php echo $show['NO_BNIKAH']?>&nik=<?php echo $show['NIKBN']?>">Cetak</a> </tr>
                                
                                <?php
                                }	
                                ?>

                                <tr>
                                <td colspan = "9" > <b> Riwayat Surat SKCK untuk Perwakilan </b></td>	
                                </tr>
                                <?php
                                while($show1 = mysqli_fetch_array($run2)){
                                    echo "<tr>";
                                    echo "<td>".$show1['NO_SKCK']."</td>";
                                    echo "<td>".$show1['NAMAPEN']."</td>";
                                    echo "<td>".$show1['NIK_PENDUDUK']."</td>";
                                    echo "<td>".$show1['TGLSURAT_AJU']."</td>";
                                    echo "<td>".$show1['NIK_AJU']."</td>";
                                    echo "<td>".$show1['NAMA_AJU']."</td>";
                                    echo "<td>".$show1['TUJUAN_AJU']."</td>";
                                    echo "<td>".$show1['KETERANGAN_AJU']."</td>";
                                ?>
                                    <td><a class="btn btn-primary" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')" href="rskck.php?nosur=<?php echo $show1['NO_SKCK']?>&nik=<?php echo $show1['NIK_AJU']?>">Cetak</a> </tr>
                                
                                <?php
                                }	
                                ?>
                            <tr>
                                <td colspan = "9" > <b> Riwayat Surat Tempat Usaha untuk Perwakilan </b></td>	
                                </tr>
                                <?php
                                while($show2 = mysqli_fetch_array($run3)){
                                    echo "<tr>";
                                    echo "<td>".$show2['NO_TUSAHA']."</td>";
                                    echo "<td>".$show2['NAMAPEN']."</td>";
                                    echo "<td>".$show2['NIK_PENDUDUK']."</td>";
                                    echo "<td>".$show2['TGLSURATTU']."</td>";
                                    echo "<td>".$show2['NIKTU']."</td>";
                                    echo "<td>".$show2['NAMATU']."</td>";
                                    echo "<td>".$show2['TUJUANTU']."</td>";
                                    echo "<td>".$show2['KETERANGAN']."</td>";
                                
                                ?>
                                    <td><a class="btn btn-primary" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')" href="rtusaha.php?nosur=<?php echo $show2['NO_TUSAHA']?>&nik=<?php echo $show2['NIKTU']?>">Cetak</a> </tr>
                                
                                <?php
                                }	
                                ?>
 
                            </table>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

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