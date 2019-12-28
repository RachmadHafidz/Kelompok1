<?php
include 'fungsi\config.php';
include 'koneksi.php';
session_start();

if(isset($_GET["simpam_error"])){
    echo "<script>alert('Terjadi Kesalahan, Tidak Dapat Menyimpan!!');history.go(-1);</script>";
}else if(isset($_GET["kosong"])){
    echo "<script>alert('Data Tidak Boleh Kosong!!');history.go(-1);</script>";
}else if(isset($_GET["sukses"])){
    echo "<script>alert('Berhasil Mangubah Password!!');history.go(-1);</script>";
}else if(isset($_GET["minim"])){
    echo "<script>alert('Minimal Password 5 karakter!!');history.go(-1);</script>";
}

$tgl=date('Y-m-d');
$year=date('Y');
$now=date('Y-m-d');
$then=date('Y-m-d', strtotime('+7 days', strtotime($now)));
$nik=$_SESSION['nik/id'];
$query2 = "SELECT * FROM `penduduk` INNER JOIN keluarga ON penduduk.NO_KK=keluarga.NO_KK and penduduk.NIK_PENDUDUK='$nik'";
            $sql2 = mysqli_query($koneksi, $query2);  // Eksekusi/Jalankan query dari variabel $query
            $dataa = mysqli_fetch_array($sql2);
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

    include 'koneksi.php';
    $kueri="SELECT max(NO_BNIKAH) as maxKode FROM sk_belumnikah";
    $hasil= mysqli_query($koneksi, $kueri);
    $tabel= mysqli_fetch_array($hasil);
    $nosurat= $tabel['maxKode'];

    $noUrut = (int) substr($nosurat, 2, 5);
    $noUrut++;

    $char="BN";
    $nosurat= $char . sprintf("%05s", $noUrut);
                                

include 'koneksi.php';
if(isset($_POST['btn_simpan'])) {
    $NO_BNIKAH = $_POST['NO_BNIKAH'];
    $NIK_PENDUDUK = $_SESSION['nik/id'];
    $TUJUANJU = $_POST['TUJUANJU'];
    $KETERANGANAJU = "Sedang Proses";
    $JENIS_SURATAJU = "Surat Pribadi";
    
    $now=date('Y-m-d');
    $then=date('Y-m-d', strtotime('+7 days', strtotime($now)));
    
        if(!empty($TUJUANJU)){
        $query = "INSERT INTO sk_belumnikah(NO_BNIKAH,NIK_PENDUDUK,TGLSURATBN,BERLAKUBN,TUJUANBN,KETERANGANBN,JSBN) VALUES('".$NO_BNIKAH."', '".$NIK_PENDUDUK."', '".$now."', '".$then."', '".$TUJUANJU."', '".$KETERANGANAJU."', '".$JENIS_SURATAJU."')";
                    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                      if($sql){// Cek jika proses simpan ke database sukses atau tidak
                        header("location:reportbnikah.php?nosur=$NO_BNIKAH");
                      }else{
                        header("location:formbnikah.php?gagal_simpan");
                      }
                    }else{
                        header("location:formbnikah.php?kurang_lengkap");
                    }
    } 

        if(isset($_GET["gagal_simpan"])){
            echo "<script>alert('Tidak Dapat Menyimpan Data!!');history.go(-1);</script>";
        }else if(isset($_GET["kurang_lengkap"])){
			echo "<script>alert('Silahkan Isi Data dengan Lengkap');history.go(-1);</script>";
		}else if(isset($_GET["cancel"])){
			echo "<script>alert('Cancel');history.go(-1);</script>";
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


    <!-- ##### Hero Area Start ##### -->
    <div class="" align="center">
    <form class="" method="post" action="">
    
<table width="50%" border="0"  cellspacing="0" cellpadding="2">
<tr>
	<td colspan="2"><hr/></td>
	</tr>
	<tr>
      <td colspan="2"><div align="center" class="post-headline"><strong><u>SURAT KETERANGAN BELUM MENIKAH</u></strong></div></td>
    </tr>
	<tr>
      <td colspan="2"><div align="center">Nomor : 474 /<input readonly type="text" name="NO_BNIKAH" value="<?php echo $nosurat;?>">/35.09.12.2002/<?php echo $year;?></div></td>
    </tr>					
	<tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
    </tr>
</table>
<table width="50%" border="0" align="center" cellspacing="0" cellpadding="2">
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Yang  bertanda tangan dibawah ini Saya Kepala Desa Sabrang,Kecamatan Ambulu, Kabupaten Jember , menerangkan dengan sebenarnya bahwa :</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>NIK</td>
      <td>&nbsp;:&nbsp;<?php echo $nik;?></td>
    
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nama Lengkap</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['NAMAPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Dilahirkan</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['TEMPATLHR'];?>, <?php echo tgl_indo($dataa['TANGGALHR']);?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jenis Kelamin</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['JK_PEN'];?>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Agama</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['AGAMAPEN'];?>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pekerjaan</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['PEKERJAANPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Kewarganegaraan</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['KWNPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['ALAMAT'];?> 
      RT/RW <?php echo $dataa['RT_RW'];?> 
      Desa <?php echo $dataa['DESA'];?> 
      Kecamatan <?php echo $dataa['KEC'];?> 
      Kabupaten <?php echo $dataa['KAB_KOTA'];?>
      Provinsi <?php echo $dataa['PROV'];?> 
      <?php echo $dataa['KDPOS'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Masa Berlaku</td>
      <td>&nbsp;:&nbsp;<?php echo tgl_indo($now); ?> sd <?php echo tgl_indo($then); ?></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut diatas benar benar penduduk Desa Sabrang Kecamatan 
				Ambulu, Kabupaten Jember, yang bersangkutan sampai saat ini masih berstatus belum menikah dan surat keterangan ini akan dipergunakan untuk persyaratan 
				<input type="text" name="TUJUANJU">.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini saya buat dengan sebenarnya dan dapatnya dipergunakan sebagai mana mestinya dan selanjutnya untuk menjadikan periksa.
		</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
</table>
<table width="50%" border="0" align="center" cellspacing="0" cellpadding="2">
    <tr align="center">
      <td width="60%">&nbsp;</td>
      <td>Sabrang, <input type="date(d-m-Y)" readonly name="TGLSURATJU" value="<?php echo tgl_indo($tgl);?>"></td>	
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
      <td><strong>KEPALA DESA SABRANG</strong></td>	
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>	
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
      <td><strong><u>ZUBAERI LUTFI</u></strong></td>
    </tr>
    
</table>
<hr>
 <input type="submit" class="btn btn-primary" name="btn_simpan" value="Cetak" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')"></td>
 <input type="reset" class="btn btn-primary" name="reset" value="Reset"></td>
</form>

</div>

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
                                    <li><a href="indexlogin.php">Beranda</a></li>
                                    <li><a href="#">Profil Desa</a>
                                        <ul class="dropdown">
                                            <li><a href="profildesa.php">Profil Desa</a></li>
                                            <li><a href="motodesa.php">Motto</a></li>
                                            <li><a href="visimisidesa.php">Visi & Misi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="berita.php">Berita</a></li>
                                    <li><a href="#">Pelayanan Surat</a>
                                        <ul class="dropdown">
                                            <li><a href="#">SK Domisili</a>
                                                <ul class="dropdown">
                                                        <li><a href="formdomisili.php">Pribadi</a></li>
                                                        <li><a href="fdom.php">Perwakilan</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">SK SKCK</a>
                                                <ul class="dropdown">
                                                        <li><a href="formskck.php">Pribadi</a></li>
                                                        <li><a href="fskck.php">Perwakilan</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">SK Belum Nikah</a>
                                                <ul class="dropdown">
                                                        <li><a href="formbnikah.php">Pribadi</a></li>
                                                        <li><a href="fbnikah.php">Perwakilan</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">SK Tempat Usaha</a>
                                                <ul class="dropdown">
                                                        <li><a href="formtusaha.php">Pribadi</a></li>
                                                        <li><a href="ftusaha.php">Perwakilan</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
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