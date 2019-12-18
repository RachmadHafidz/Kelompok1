
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
$tgl=date('d-m-Y');

?>
<div class="container">

            <form class="form-horizontal" role="form" method="post" action="reportskck.php">
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
            ?>
           
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
                        <input type="text" readonly placeholder="No Surat" class="form-control" name= "NO_DOMISILI" value="<?php echo $nosurat ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NO_SURATDOM" class="col-sm-3 control-label"> Data Diri</label>
                </div>

                <div class="form-group">
                    <label for="NIKAJU" class="col-sm-3 control-label"> No Dan Tanggal KTP</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="No Dan Tanggal KTP" class="form-control" name = "NIKAJU">
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
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="STATUSAJU" class="col-sm-3 control-label"> Status Pernikahan</label>
                    <div class="col-sm-9">
                        <select type="text" placeholder="Status" class="form-control" name= "STATUSAJU">
                            <option>Belum Kawin</option>
                            <option>Kawin</option>
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
                    <label for="KEWARGANEGARAANAJU" class="col-sm-3 control-label">Pendidikan </label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Pendidikan" class="form-control" name= "KWNAJU">
                    </div>
                </div>

                <div class="form-group">
                    <label for="ALAMATAJU" class="col-sm-3 control-label">Alamat Dusun</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Alamat Dusun" class="form-control" name= "ALAMATAJU">
                    </div>
                </div>
                <div class="form-group">
                    <label for="RTRW" class="col-sm-3 control-label">RT/RW</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="RT/RW" class="form-control" name= "RTRW">
                    </div>
                </div>
                <div class="form-group">
                <label for="TUJUANJU" class="col-sm-3 control-label">Tujuan </label>
                    <div class="col-sm-9">
                    <input type="text" placeholder="Tujuan" class="form-control" name= "TUJUANJU">
                    </div>
                </div>
            
                <input type="submit" class="btn btn-primary btn-block" name="btn_simpan" value="Cetak">
</br>
	            <a href="http://localhost/Kelompok1/rian/selasa/nyoba2.php"><input class="btn btn-primary btn-block" type="button" value="Batal"></a>
            </form>   <!-- /form -->
    
</div> <!-- ./container -->

</body>
</html>


