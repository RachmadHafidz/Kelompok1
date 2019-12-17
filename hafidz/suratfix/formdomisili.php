
<!DOCTYPE html>
<html lang="en">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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

        .dropdown-content a:hover {background-color: #f1f1f1;}

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

<?php
include 'koneksi.php';

if (isset($_POST['btn_simpan'])) {
$NO_DOMISILI = $_POST['NO_DOMISILI'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TGLSURATJU = $_POST['TGLSURATJU'];
$TUJUANJU = $_POST['TUJUANJU'];
$KETERANGANAJU = "Sedang Proses";
$JENIS_SURATAJU = "Surat Pribadi";


	$query = "INSERT INTO sk_domisili(`NO_DOMISILI`, `NIK_PENDUDUK`, `TGLSURATAJU`, `TUJUANAJU`, `KETERANGANAJU`, `JENIS_SURATAJU`) VALUES('$NO_DOMISILI',$NIK_PENDUDUK, '$TGLSURATJU','$TUJUANJU', '$KETERANGANAJU','$JENIS_SURATAJU')";
    $sql = mysqli_query($koneksi, $query);
	
	if($sql){
        header('location:reportdomisili.php');
        
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='formdomisili.php'>Kembali Ke Form</a>";
    }
}


session_start();
$nik= $_SESSION['NIK_PENDUDUK'];
$nilai = mysqli_query($koneksi,"select * from penduduk inner join keluarga on penduduk.NO_KK = keluarga.NO_KK where NIK_PENDUDUK= $nik");

$data =  mysqli_fetch_array($nilai);
	
?>
<div class="container">

            <form class="form-horizontal" role="form" method= "post" action="simpandomisili.php">
            
           
                <center><h2>Surat Domisili</h2></center>
              
                <div class="form-group">
                    <label for="TANGGAL_SURAT" class="col-sm-3 control-label">Tanggal surat</label>
                    <div class="col-sm-9">
                        <input type="date"  class="form-control" name= "TGLSURATJU">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NO_SURATDOM" class="col-sm-3 control-label"> no surat</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="No Surat Domisili" class="form-control" name= "NO_DOMISILI">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NO_SURATDOM" class="col-sm-3 control-label"> Data Diri</label>
                </div>

                <div class="form-group">
                    <label for="NIK_PENDUDUK" class="col-sm-3 control-label"> NIK</label>
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
                <label for="TUJUANJU" class="col-sm-3 control-label">Tujuan </label>
                    <div class="col-sm-9">
                    <input type="text" placeholder="Tujuan" class="form-control" name= "TUJUANJU">
                    </div>
                </div>

                <hr>
                <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            
                <input type="submit" class="btn btn-primary btn-block" name="btn_simpan" value="Simpan">
</br>
	            <a href="http://localhost/Kelompok1/rian/selasa/nyoba2.php"><input class="btn btn-primary btn-block" type="button" value="Batal"></a>
            </form>   <!-- /form -->
    
</div> <!-- ./container -->

</body>
</html>


