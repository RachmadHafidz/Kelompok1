<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php include 'koneksi.php'; 



?>
<style>
        .dropbtn 
        {
        background:none;
        color: rgb(0, 0, 0);
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        }
    
      
        .dropdown 
        {
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

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content { display: block; }

        .dropdown:hover .dropbtn {background-color: #ffffff;}

        .right {text-align:right;}

        body {background: rgb(255, 255, 255);}

@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
/* Fixed navbar */

/* General sizing */
ul.dropdown-lr {
  width: 300px;
}

/* mobile fix */
@media (max-width: 768px) {
	.dropdown-lr h3 {
		color: #eee;
	}
	.dropdown-lr label {
		color: #eee;
	}
}

    </style>  
<body>
 
<?php session_start(); 
?>

  <nav class="navbar navbar-dark bg-dark justify-content-between"> 
      <div class="topnav" id="myTopnav">
       
        <div class="dropdown">
          <button class="dropbtn" > <a href="http://localhost/Kelompok1/S.I.D/beranda.php">Beranda</a>
            <i class="fa fa-caret-down"></i>
          </button>
      </div>

      <div class="dropdown">
        <button class="dropbtn" > <a href="http://localhost/Kelompok1/S.I.D/profillogin.php">Profil Desa</a>
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="http://localhost/Kelompok1/S.I.D/profillogin.php">Profil Desa</a>
          <a href="http://localhost/Kelompok1/S.I.D/visimisilogin.php">Visi & Misi</a>
          <a href="http://localhost/Kelompok1/S.I.D/mottologin.php">Motto</a>
          <a href="http://localhost/Kelompok1/S.I.D/crud/index1.php">Perangkat Desa</a>
          
        </div>
      </div> 
  
      <div class="dropdown">
        <button class="dropbtn" > <a href="profil.html">Berita</a>
          <i class="fa fa-caret-down"></i>
        </button>
    </div>
  
    <div class="dropdown">
      <button class="dropbtn" > <a href="petunjuk.html">Petunjuk</a>
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
    
      <?php 

 

// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['NIK_PENDUDUK'];
 
?>
 <?php

 $nik= $_SESSION['NIK_PENDUDUK'];
$nilai = mysqli_query($koneksi,"select * from penduduk inner join keluarga on penduduk.NO_KK = keluarga.NO_KK where NIK_PENDUDUK= $nik");

$data =  mysqli_fetch_array ($nilai) ;
 
 ?>
   
</nav>

<div class="container">
<?php
$tgl=date('d-m-Y');

?>
            <form class="form-horizontal" role="form" method= "post" action="">
                
            <?php
            $kuery1 = "SELECT max(NO_DOMISILI) as maxKode from sk_domisili";
            $hasil1 = mysqli_query ($koneksi, $kuery1);
            $tabel1 = mysqli_fetch_array($hasil1);
            $no_surat1 = $tabel1['maxKode'];

            $nourut = (int) substr ($no_surat1, 2, 5);
            $nourut++;

            $char = "D";
            $no_surat1 = $char . sprintf ("%05s", $nourut); ?>

<?php
include 'koneksi.php';
if(isset($_POST['btn_simpan'])) {
$NO = $_POST['NO_BNIKAH'];
$NIK_PENDUDUK = "$nik ";
$NAMAAJU = $_POST['NAMABN'];
$JKAJU = $_POST['JKBN'];
$AGAMAAJU = $_POST['AGAMABN'];
$NIKPENGAJU = $_POST['NIKBN'];
$TMPLHRAJU = $_POST['TMPLHRBN'];
$TGLHRAJU = $_POST['TGLHRBN'];
$STATUSAJU = $_POST['STATUSAJU'];
$PEKERJAANAJU = $_POST['PEKERJAANBN'];
$ALAMATAJU = $_POST['ALAMATBN'];
$KWNAJU = $_POST['KWNBN'];
$TUJUANJU = $_POST['TUJUANBN'];
$KETERANGANAJU = "Sedang Proses";
$JENIS_SURATAJU = "Surat Perwakilan";

$now=date('Y-m-d');
$then=date('Y-m-d', strtotime('+7 days', strtotime($now)));

    if(!empty($TUJUANJU) && !empty($NIKPENGAJU) && !empty($NAMAAJU) && !empty($JKAJU) && !empty($AGAMAAJU) && !empty($TMPLHRAJU) && !empty($TGLHRAJU) && !empty($STATUSAJU) && !empty($PEKERJAANAJU) && !empty($KWNAJU) && !empty($ALAMATAJU)){
    $query = "INSERT INTO sk_domisili VALUES('".$NO_DOMISILI."', '".$NIK_PENDUDUK."', '".$now."', '".$then."', '".$NAMAAJU."', '".$JKAJU."', '".$AGAMAAJU."', '".$NIKPENGAJU."', '".$TMPLHRAJU."', '".$TGLHRAJU."', '".$STATUSAJU."', '".$PEKERJAANAJU."', '".$KWNAJU."', '".$ALAMATAJU."', '".$TUJUANJU."', '".$KETERANGANAJU."', '".$JENIS_SURATAJU."')";
                $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                  if($sql){// Cek jika proses simpan ke database sukses atau tidak
                    header("location:reportdomisili.php?nosur=$NO_DOMISILI");
                  }else{
                    header("location:formdomisili.php?gagal_simpan");
                  }
                }else{
                    header("location:formdomisili.php?kurang_lengkap");
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
           
                <center><h2>Surat Domisili</h2></center>
              
         
           
            
          
            <div class="form-group">
                <label for="TANGGAL_SURAT" class="col-sm-3 control-label">Tanggal surat</label>
                <div class="col-sm-9">
                    <input type="date('d-m-Y')" readonly class="form-control" name="TGLSURATBN" value="<?php echo $tgl; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="NO_SURATDOM" class="col-sm-3 control-label"> no surat</label>
                <div class="col-sm-9">
                    <input type="text" readonly placeholder="No Surat Domisili" class="form-control" name= "NO_DOMISILI" value="<?php echo $no_surat1; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="NO_SURATDOM" class="col-sm-3 control-label"> Data Diri</label>
            </div>

            <div class="form-group">
                <label for="NIKAJU" class="col-sm-3 control-label"> NIK</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="NIK" class="form-control" name = "NIKAJU">
                </div>
            </div>

            <div class="form-group">
                <label for="NAMAPENDUDUK" class="col-sm-3 control-label"> Nama</label>
                <div class="col-sm-9">  
                    <input type="text"  placeholder="Nama" class="form-control" name= "NAMAAJU" >
                </div>
            </div>

            <div class="form-group">
                <label for="TMPLHRAJU" class="col-sm-3 control-label"> Tempat lahir</label>
                <div class="col-sm-9">  
                    <input type="text" placeholder="Tempat Lahir" class="form-control" name= "TMPLHRAJU" >
                </div>
            </div>
            
            <div class="form-group">
                <label for="TGL_LAHIRAJU" class="col-sm-3 control-label"> Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="date" placeholder="Tanggal Lahir" class="form-control" name= "TGLHRAJU">
                </div>
            </div>

            <div class="form-group">
                <label for="JKAJU" class="col-sm-3 control-label"> Jenis Kelamin</label>
                <div class="col-sm-9">
                     <select type="text" name="JKAJU" class="form-control" placeholder="Jenis Kelamin">
                        <option>-</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="STATUSAJU" class="col-sm-3 control-label"> Status Pernikahan</label>
                <div class="col-sm-9">
                    <select type="text" placeholder="Status" class="form-control" name= "STATUSAJU">
                        <option>-</option>
                        <option>Kawin</option>
                        <option>Belum Kawin</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="AGAMAAJU" class="col-sm-3 control-label">Agama </label>
                <div class="col-sm-9">
                    <input type="text" placeholder="Agama" class="form-control" name= "AGAMAAJU">
                </div>
            </div>

            <div class="form-group">
                <label for="PEKERJAANAJU" class="col-sm-3 control-label">Pekerjaan </label>
                <div class="col-sm-9">
                    <input type="text" placeholder="Pekerjaan" class="form-control" name= "PEKERJAANAJU">
                </div>
            </div>

            <div class="form-group">
                <label for="KEWARGANEGARAANAJU" class="col-sm-3 control-label">Kewarganegaraan </label>
                <div class="col-sm-9">
                    <input type="text" placeholder="Kewarganegaraan" class="form-control" name= "KWNAJU" value="WNI">
                </div>
            </div>

            <div class="form-group">
                <label for="ALAMATAJU" class="col-sm-3 control-label">Alamat Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="Alamat Lengkap" class="form-control" name= "ALAMATAJU">
                </div>
            </div>
            <div class="form-group">
            <label for="TUJUANJU" class="col-sm-3 control-label">Tujuan </label>
                <div class="col-sm-9">
                <input type="text" placeholder="Persyaratan .... Contoh : Administrasi RSU Jember " class="form-control" name= "TUJUANJU">
                </div>
            </div>
        
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
            
                <input type="submit" class="btn btn-primary btn-block" value="Simpan">
</br>
	            <a href="http://localhost/Kelompok1/rian/selasa/nyoba2.php"><input class="btn btn-primary btn-block" type="button" value="Batal"></a>
            </form>
            </form>   <!-- /form -->
    
</div> <!-- ./container -->


</body>