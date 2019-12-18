
<!DOCTYPE html>
<html lang="en">
<head>

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
 </head>

 <body>  
<?php
$tgl=date('d-m-Y');

?>
<?php
            include 'koneksi.php';
            $kueri="SELECT max(NO_SKCK) as maxKode FROM sk_skck";
            $hasil= mysqli_query($koneksi, $kueri);
            $tabel= mysqli_fetch_array($hasil);
            $nosurat= $tabel['maxKode'];

            $noUrut = (int) substr($nosurat, 2, 5);
            $noUrut++;

            $char="SK";
            $nosurat= $char . sprintf("%05s", $noUrut);

include 'koneksi.php';
session_start();
if(isset($_POST['btn_simpan'])) {
$NO_SKCK = $_POST['NO_SKCK'];
$NIK_PENDUDUK = $_SESSION['NIK_PENDUDUK'];
$NAMAAJU = $_POST['NAMAAJU'];
$JKAJU = $_POST['JKAJU'];
$AGAMAAJU = $_POST['AGAMAAJU'];
$NIKPENGAJU = $_POST['NIKAJU'];
$TMPLHRAJU = $_POST['TMPLHRAJU'];
$TGLHRAJU = $_POST['TGLHRAJU'];
$STATUSAJU = $_POST['STATUSAJU'];
$PEKERJAANAJU = $_POST['PEKERJAANAJU'];
$PENDIDIKANAJU = $_POST['PENDIDIKANAJU'];
$ALAMATAJU = $_POST['ALAMATAJU'];
$KWNAJU = $_POST['KWNAJU'];
$TUJUANJU = $_POST['TUJUANJU'];
$KETERANGANAJU = "Sedang Proses";
$JENIS_SURATAJU = "Surat Perwakilan";

$now=date('Y-m-d');
$then=date('Y-m-d', strtotime('+7 days', strtotime($now)));

    if(!empty($TUJUANJU) && !empty($NIKPENGAJU) && !empty($NAMAAJU) && !empty($JKAJU) && !empty($AGAMAAJU) && !empty($TMPLHRAJU) && !empty($TGLHRAJU) && !empty($STATUSAJU) && !empty($PEKERJAANAJU) && !empty($KWNAJU) && !empty($ALAMATAJU)){
    $query = "INSERT INTO sk_skck VALUES('".$NO_SKCK."', '".$NIK_PENDUDUK."', '".$now."', '".$then."', '".$NAMAAJU."', '".$JKAJU."', '".$TMPLHRAJU."', '".$TGLHRAJU."', '".$NIKPENGAJU."',  '".$KWNAJU."',  '".$AGAMAAJU."', '".$STATUSAJU."', '".$PEKERJAANAJU."', '".$PENDIDIKANAJU."', '".$ALAMATAJU."', '".$TUJUANJU."', '".$KETERANGANAJU."', '".$JENIS_SURATAJU."')";
                $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                    header("location:reportskck.php?nosur=$NO_SKCK");
                  }else{
                    header("location:formskck.php?gagal_simpan");
                  }
                }else{
                    header("location:formskck.php?kurang_lengkap");
                }
} 

        if(isset($_GET["gagal_simpan"])){
            echo "<script>alert('Tidak Dapat Menyimpan Data!!');history.go(-1);</script>";
        }else if(isset($_GET["kurang_lengkap"])){
			echo "<script>alert('Silahkan Isi Data dengan Lengkap');history.go(-1);</script>";
		}
?>  
<div class="container">

            <form class="form-horizontal" role="form" method="post" action="">
            
           
                <center><h2>Surat SKCK</h2></center>
              
                <div class="form-group">
                    <label for="TANGGAL_SURAT" class="col-sm-3 control-label">Tanggal surat</label>
                    <div class="col-sm-9">
                        <input type="date('d-m-Y')" readonly class="form-control" name="TGLSURATJU" value="<?php echo $tgl; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NO_SURATDOM" class="col-sm-3 control-label"> no surat</label>
                    <div class="col-sm-9">
                        <input type="text" readonly placeholder="No Surat" class="form-control" name= "NO_SKCK" value="<?php echo $nosurat; ?>">
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
                    <label for="PENDIDIKANAJU" class="col-sm-3 control-label">Pekerjaan </label>
                    <div class="col-sm-9">
                        <select type="text" placeholder="Pekerjaan" class="form-control" name= "PENDIDIKANAJU">
                            <option>-</option>
                            <option>Tidak/Belum Sekolah</option>
                            <option>Belum Tamat SD/Sederajat</option>
                            <option>Tamat SD/Sederajat</option>
                            <option>SLTP/Sederajat</option> 
                            <option>SLTA/Sederajat</option>
                            <option>Diploma I/II</option> 
                            <option>Akademi/Diploma III/S. Muda</option>
                            <option>Diploma IV/Strata I</option>
                            <option>Strata II</option>
                            <option>Strata III</option> 
                            </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="KEWARGANEGARAANAJU" class="col-sm-3 control-label">Kewarganegaraan </label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Kewarganegaraan" class="form-control" name= "KWNAJU">
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
                    <input type="text" placeholder="Tujuan" class="form-control" name= "TUJUANJU">
                    </div>
                </div>
            
                <input type="submit" class="btn btn-primary btn-block" name="btn_simpan" value="Cetak" onclick="return confirm('Apakah Anda Ingin Mencetak Surat?')">
</br>
	            <a href="http://localhost/Kelompok1/rian/selasa/nyoba2.php"><input class="btn btn-primary btn-block" type="button" value="Batal"></a>
            </form>   <!-- /form -->
    
</div> <!-- ./container -->

</body>
</html>


