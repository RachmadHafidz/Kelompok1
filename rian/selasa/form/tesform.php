<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
	// Load file koneksi.php
	include "koneksi1.php";
?>

<?php
session_start();
$NIK_PENDUDUK =$_SESSION['NIK_PENDUDUK'];
$query = "SELECT * FROM penduduk inner join keluarga on penduduk.NO_KK=keluarga.NO_KK where NIK_PENDUDUK='$NIK_PENDUDUK'"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	?>
<div class="container">

            <form class="form-horizontal" role="form" method= "post" action="formsimpan.php">
            
           
                <center><h2>Surat Domisili</h2></center>
              
                <div class="form-group">
                    <label for="TANGGAL_SURAT" class="col-sm-3 control-label">Tanggal surat</label>
                    <div class="col-sm-9">
                        <input type="date"  class="form-control" name= "TANGGAL_SURAT">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NO_SURATDOM" class="col-sm-3 control-label"> no surat</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="No Surat Domisili" class="form-control" name= "NO_SURATDOM">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NIK_PENDUDUK" class="col-sm-3 control-label"> NIk</label>
                    <div class="col-sm-9">
                        <input type="number"  placeholder="NIK" class="form-control" value="<?php echo $sql['NIK_PENDUDUK'];?> ">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NAMAPENDUDUK" class="col-sm-3 control-label"> Nama</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Nama" class="form-control" name= "NAMAPENDUDUK">
                    </div>
                </div>

                <div class="form-group">
                    <label for="TMP_LAHIRPEN" class="col-sm-3 control-label"> Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Tempat Lahir" class="form-control" name= "TMP_LAHIRPEN">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="TGL_LAHIRPEN" class="col-sm-3 control-label"> Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Tanggal Lahir" class="form-control" name= "TGL_LAHIRPEN">
                    </div>
                </div>

                <div class="form-group">
                    <label for="JENIS_KELAMINPEN" class="col-sm-3 control-label"> Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Tempat Lahir" class="form-control" name= "">
                    </div>
                </div>

                <div class="form-group">
                    <label for="JENIS_KELAMINPEN" class="col-sm-3 control-label"> Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Tempat Lahir" class="form-control" name= "TMP_LAHIRPEN">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NAMA_PENGAJU" class="col-sm-3 control-label"> nama pengaju</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="NAMA PENGAJU" class="form-control" name= "NAMA_PENGAJU">
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
                        <input type="text"  placeholder="TUJUAN" class="form-control" name= "TUJUAN">
                    </div>
                </div>

                
               
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="JK_PENGAJU"  value="Perempuaan">perempuan
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="JK_PENGAJU"  value="Laki-laki">laki-laki
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                
                <input type="submit" value="Simpan">
	            <a href="http://localhost/Kelompok1/rian/selasa/form/formindex.php"><input type="button" value="Batal"></a>
            </form>
              <!-- /form -->
    </form>
</div> <!-- ./container -->
