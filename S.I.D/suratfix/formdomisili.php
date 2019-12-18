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
              Pelayanan Surat Keterangan Catatan Kepolisian
              </button>
              <div class="dropdown-menu">
              <a href="http://localhost/Kelompok1/S.I.D/suratfix/formskck.php">Pribadi</a>
              <a href="#">Pengaju</a>
           </div>
           </div>
           <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pelayanan Surat Belum Nikah
              </button>
              <div class="dropdown-menu">
              <a href="http://localhost/Kelompok1/S.I.D/suratfix/formbelumnikah.php">Pribadi</a>
              <a href="#">Pengaju</a>
           </div>
           </div>
           <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pelayanan Surat Tempat Usaha
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

            <form class="form-horizontal" role="form" method= "post" action="simpandomisili.php">
                
            <?php
            $tgl=date('d-m-Y');

            $kuery1 = "SELECT max(NO_DOMISILI) as maxKode from sk_domisili";
            $hasil1 = mysqli_query ($koneksi, $kuery1);
            $tabel1 = mysqli_fetch_array($hasil1);
            $no_surat1 = $tabel1['maxKode'];

            $nourut = (int) substr ($no_surat1, 2, 5);
            $nourut++;

            $char = "D";
            $no_surat1 = $char . sprintf ("%05s", $nourut); ?>
           
                <center><h2>Surat Domisili</h2></center>
              
                <div class="form-group">
                    <label for="TANGGAL_SURAT" class="col-sm-3 control-label">Tanggal surat</label>
                    <div class="col-sm-9">
                        <input type="date(d-m-Y)" readonly class="form-control" name= "TGLSURATAJU" value="<?php echo $tgl;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NO_SURATDOM" class="col-sm-3 control-label"> no surat</label>
                    <div class="col-sm-9">
                    <input type="text" readonly  placeholder="No Surat Domisili" value = "<?php echo $no_surat1;?>" class="form-control" name= "NO_DOMISILI">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NO_SURATDOM" class="col-sm-3 control-label"> Data Diri</label>
                </div>

                <div class="form-group">
                    <label for="NIK_PENDUDUK" class="col-sm-3 control-label"> NIk</label>
                    <div class="col-sm-9">
                        <input type="number" readonly value="<?php echo $data['NIK_PENDUDUK']; ?>" placeholder="NIK" class="form-control" name = "NIK_PENDUDUK">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NAMAPENDUDUK" class="col-sm-3 control-label"> Nama</label>
                    <div class="col-sm-9">  
                        <input type="text" readonly value="<?php echo $data['NAMAPEN']; ?>"  placeholder="Nama" class="form-control" name= "NAMAPENDUDUK" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="TEMPATLHR" class="col-sm-3 control-label"> Tempat lahir</label>
                    <div class="col-sm-9">  
                        <input type="text" readonly value="<?php echo $data['TEMPATLHR']; ?>"  placeholder="Nama" class="form-control" name= "TEMPATLHR" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="TGL_LAHIRPEN" class="col-sm-3 control-label"> Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" readonly value="<?php echo $data['TANGGALHR']; ?>" placeholder="Tanggal Lahir" class="form-control" name= "TGL_LAHIRPEN">
                    </div>
                </div>

                <div class="form-group">
                    <label for="JENIS_KELAMINPEN" class="col-sm-3 control-label"> Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <input type="text" readonly value="<?php echo $data['JK_PEN']; ?>" placeholder="Jenis Kelamin" class="form-control" name= "">
                    </div>
                </div>

                <div class="form-group">
                    <label for="STATUSPEN" class="col-sm-3 control-label"> Status Pernikahan</label>
                    <div class="col-sm-9">
                        <input type="text" readonly value="<?php echo $data['STATUSPEN']; ?>" placeholder="Status" class="form-control" name= "">
                    </div>
                </div>

                <div class="form-group">
                    <label for="AGAMAPEN" class="col-sm-3 control-label">Agama </label>
                    <div class="col-sm-9">
                        <input type="text" readonly value="<?php echo $data['AGAMAPEN']; ?>" placeholder="Agama pengaju" class="form-control" name= "AGAMAPEN">
                    </div>
                </div>

                <div class="form-group">
                    <label for="PEKERJAANPEN" class="col-sm-3 control-label">Pekerjaan </label>
                    <div class="col-sm-9">
                        <input type="text" readonly value="<?php echo $data['PEKERJAANPEN']; ?>" placeholder="Agama pengaju" class="form-control" name= "PEKERJAANPEN">
                    </div>
                </div>

                <div class="form-group">
                    <label for="KEWARGANEGARAANPEN" class="col-sm-3 control-label">Kewarganegaraan </label>
                    <div class="col-sm-9">
                        <input type="text" readonly value="<?php echo $data['KWNPEN']; ?>" placeholder="Kewarganegaraan" class="form-control" name= "KEWARGANEGARAANPEN">
                    </div>
                </div>

                <div class="form-group">
                    <label for="ALAMATPEN" class="col-sm-3 control-label">Alamat </label>
                    <div class="col-sm-9">
                        <input type="text" readonly value="<?php echo $data['ALAMAT']; ?>" placeholder="Alamat" class="form-control" name= "ALAMATPEN">
                    </div>
                </div>

                <div class="form-group">
                    <label for="TUJUAN" class="col-sm-3 control-label"> TUJUAN</label>
                    <div class="col-sm-9">
                        <input type="text" method= "get" placeholder="TUJUAN" class="form-control" name= "TUJUANAJU">
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