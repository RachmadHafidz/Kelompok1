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
          <a href="http://localhost/Kelompok1/S.I.D/suratfix/formdomisili.php">Pelayanan Surat Domisili</a>
          <a href="http://localhost/Kelompok1/S.I.D/suratfix/formskck.php">Pelayanan Surat SKCK</a>
          <a href="#">Pelyanan Surat Belum Menikah</a>
          <a href="http://localhost/Kelompok1/S.I.D/suratfix/formtempatusaha.php">Pelayanan Surat Tempat Usaha</a>
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
                        <input type="date"  class="form-control" name= "TGLSURATAJU">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NO_SURATDOM" class="col-sm-3 control-label"> no surat</label>
                    <div class="col-sm-9">
                    <input type="text"  placeholder="No Surat Domisili" value = "<?php echo $no_surat1;?>" class="form-control" name= "NO_DOMISILI">
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
                    <label for="NAMA_PENGAJU" class="col-sm-3 control-label"> nama pengaju</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="NAMA PENGAJU" class="form-control" name= "NAMA_PENGAJU">
                    </div>
                </div>

               
                <div class="form-group">
                    <label for="JENIS_KELAMINPEN" class="col-sm-3 control-label"> Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Tempat Lahir" class="form-control" name= "TMP_LAHIRPEN">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="AGAMA_PENGAJU" class="col-sm-3 control-label">Agama pengaju </label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Agama pengaju" class="form-control" name= "AGAMA_PENGAJU">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NIK_PENGAJU" class="col-sm-3 control-label"> NIk</label>
                    <div class="col-sm-9">
                        <input type="number"  placeholder="NIK PENGAJU" class="form-control" name= "NIK_PENGAJU">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="TMP_LAHIRPENGAJU" class="col-sm-3 control-label"> TMP LAHIR</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="TMPT LAHIR" class="form-control" name= "TMP_LAHIRPENGAJU">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="TGL_LAHIRPENGAJU" class="col-sm-3 control-label">Tanggal Lahir pengaju</label>
                    <div class="col-sm-9">
                        <input type="date"  class="form-control" name= "TGL_LAHIRPENGAJU">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="PEKERJAANPENGAJU" class="col-sm-3 control-label"> PEKERJAAN PENGAJU</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="PEKERJAAN PENGAJU" class="form-control" name= "PEKERJAANPENGAJU">
                    </div>
                </div>

                <div class="form-group">
                    <label for="ALAMATPENGAJU" class="col-sm-3 control-label"> ALAMAT PENGAJU</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="ALAMAT PENGAJU" class="form-control" name= "ALAMATPENGAJU">
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="TUJUAN" class="col-sm-3 control-label"> TUJUAN</label>
                    <div class="col-sm-9">
                        <input type="text" method= "get" placeholder="TUJUAN" class="form-control" name= "TUJUANAJU">
                    </div>
                </div>

                <div class="form-group">
                    <label for="TUJUAN" class="col-sm-3 control-label"> JENIS SURAT</label>
                    <div class="col-sm-9">
                        <input type="text" method= "get" placeholder="JENIS SURAT" class="form-control" name= "JENIS_SURATAJU">
                    </div>
                </div>

                <div class="form-group">
                    <label for="TUJUAN" class="col-sm-3 control-label"> KET</label>
                    <div class="col-sm-9">
                        <input type="text" method= "get" placeholder="KETERANGAN" class="form-control" name= "KETERANGANAJU">
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