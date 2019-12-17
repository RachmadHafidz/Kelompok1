
<?php 
        include 'koneksi.php';

        if (isset($_POST['ala'])) {
              $id =  $_POST['ID'];
              $nik =  strip_tags($_POST['NIK']);
              $nama =  strip_tags($_POST['NAMA']);
              $jk =  strip_tags($_POST['JK']);
              $user =  strip_tags($_POST['USER']);
              $pass =  strip_tags(md5($_POST['PASS']));
              $level =  strip_tags($_POST['LEVEL']);
              $foto =  strip_tags($_FILES['FOTO']['name']);
              $tmp =  strip_tags($_FILES['FOTO']['tmp_name']);
              $sa =  strip_tags($_POST['SA']);

              $fotobaru = date('dmYHis').$foto;
              $path = "images/".$fotobaru;
              if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
                // Proses simpan ke Database
                if(empty($user && $pass)){
                  header("location:pdadmin.php?field_kosong");
                }else{
                  $query = sprintf("INSERT INTO admin VALUES('".$id."', '".$nik."', '".$nama."', '".$jk."', '".$user."', '".$pass."', '".$level."' ,'".$fotobaru."', '".$sa."')");
                  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                            // Jika Sukses, Lakukan :
                            header("location: pdadmin.php"); // Redirect ke halaman index.php
                    }else{
                          // Jika Gagal, Lakukan :
                          header("location:pdadmin.php?simpan_error");
                    }
                }
              }else{
                // Jika gambar gagal diupload, Lakukan :
                header("location:pdadmin.php?upload_gagal");
              }
            }else if(isset($_GET['id']) && isset($_GET['Hapus'])){
              $id = $_GET['id'];
              $sql_hapus = "DELETE FROM admin WHERE ID_ADMIN=" . $id;
              $hapus = mysqli_query($koneksi, $sql_hapus);
              
              if($hapus){
                if($_GET['Hapus'] == 'delete'){
                  header('location: pdadmin.php');
                }
              }else{
                header('location: pdadmin.php?gagal_hapus');
              }
            }else if(isset($_POST['btn_Edit'])){
              
              $idi =  $_POST['id'];
              $niik =  $_POST['niik'];
              $namaa =  $_POST['namaa'];
              $jkl =  $_POST['jkl'];
              $useer =  $_POST['useer'];
              $passw =  md5($_POST['passw']);
              $lvel =  $_POST['lvel'];
              $fotoo = $_FILES['fotoo']['name'];
              $sak = $_POST['sak'];

              if (strlen($fotoo)>0) {
                //upload
                if (is_uploaded_file($_FILES['fotoo']['tmp_name'])) {
                move_uploaded_file ($_FILES['fotoo']['tmp_name'], "images/".$fotoo);
                }
                mysqli_query ("UPDATE admin SET FOTO='$fotoo' WHERE ID_ADMIN='$idi'");
                }
                $perubah = "ID_ADMIN='".$idi."',NIKADMIN=".$niik.",NAMAADMIN=".$namaa.",JENIK_KELAMIN='".$jkl."USERNAME=".$useer."',PASSWORD=".$passw.",LEVEL=".$lvel.",FOTO='".$fotoo.",STATUS_AKUN='".$sak."'";
                $sql_update = "UPDATE admin SET ".$perubah." WHERE ID_ADMIN=$id";
                $sql = mysqli_query($koneksi, $query);
                if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                  // Jika Sukses, Lakukan :
                  header("location: pdadmin.php"); // Redirect ke halaman index.php
                }else{
                // Jika Gagal, Lakukan :
                header("location:pdadmin.php?Update_error");
                }
              }
            

            if(isset($_GET["simpan_error"])){
              echo "<script>alert('Gagal Menyimpan');history.go(-1);</script>";
            }elseif(isset($_GET["upload_gagal"])){
              echo "<script>alert('Gagal Mengunggah Gambar atau Gambar Kosong');history.go(-1);</script>";
            }elseif(isset($_GET["field_kosong"])){
              echo "<script>alert('Username atau Password tidak boleh kosong');history.go(-1);</script>";
            }elseif(isset($_GET["gagal_hapus"])){
              echo "<script>alert('Tidak dapat menghapus');history.go(-1);</script>";
            }elseif(isset($_GET["Update_error"])){
              echo "<script>alert('Terjadi Kesalahan saat mengubah Data');history.go(-1);</script>";
            }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">S.I.D. SABRANG</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <li class="user-profile-data">
          <div class="dropdown-item" href="profil.php">Hello <?php session_start(); echo $_SESSION['username']; ?></div>
          </li>
          <div class="dropdown-divider"></div>
          <li> <a class="dropdown-item" href="profil.php">Profil</a></li>

          <div class="dropdown-divider"></div>
          <li> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
        </ul>
      </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span>
        </a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-table"></i>
          <span>Data Anggota</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Pendaftaran:</h6>
          <a class="dropdown-item" href="pdpenduduk.php">Penduduk</a>
          <a class="dropdown-item" href="pdkeluarga.php">Keluarga</a>
          <a class="dropdown-item" href="pdadmin.php">Admin</a>
          <a class="dropdown-item" href="pdpdesa.php">Perangkat Desa</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Data:</h6>
          <a class="dropdown-item" href="dtpenduduk.php">Data Penduduk</a>
          <a class="dropdown-item" href="dtkeluarga.php">Data Keluarga</a>
          <a class="dropdown-item" href="dtadmin.php">Data Admin</a>
          <a class="dropdown-item" href="dtpdesa.php">Data Perangkat Desa</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Surat Online</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Surat:</h6>
          <a class="dropdown-item" href="#">Semua</a>
          <a class="dropdown-item" href="#">SP Kelahiran</a>
          <a class="dropdown-item" href="#">SP Domisili</a>
          <a class="dropdown-item" href="#">SP Perubahan KTP</a>
          <a class="dropdown-item" href="#">SP SKCK</a>
          <a class="dropdown-item" href="#">SP Perijinan</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Suara Warga:</h6>
          <a class="dropdown-item" href="#">Pesan</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Beranda</a>
          </li>
          <li class="breadcrumb-item active">Data Anggota</li>
          <li class="breadcrumb-item active">Pendaftaran Admin</li>
        </ol>

<script>  $(function(){
$('#tabel').show();
$('#utama').hide();
$('#rubah').show();
$('#tampil').click(function(){ $('#tampil').hide(); $('#utama').slideDown(); $('#rubah').slideUp();}); 
$('#Ubah').click(function(){ $('#rubah').slideDown(); $('#tampil').hide(); $('#utama').slideUp(); });
$('#batal').click(function(){ $('#utama').slideUp(); $('#tampil').show(); $('#rubah').slideUp(); });
//$('#batal2').click(function(){ $('#utama').slideUp(); $('#tampil').show(); }); 
}); </script>

        <!-- DataTables Example -->
        <input type="submit" name="penambahan" id="tampil" value="Tambah Data">
        <!-- Tambah Data -->
        <div class="card mb-3" id="utama">
          <div class="card-header">
            <i class="fas fa-edit"></i>
            Pendaftaran Admin</div>
          <div class="card-body">
        <form method="" action="" enctype="multipart/form-data">
            <table cellpadding="8">
            <tr><td>NIK</td><td><input type="text" name="NIK"></td>
            <td>LEVEL</td><td>
                        <select name="LEVEL">
                            <option>Administrator</option>
                            <option>Petugas</option>
                        </select>
                    </td> 
            
            <td>USERNAME</td><td><input type="text" name="USER"></td></tr>
            <tr><td>NAMA</td><td><input type="text" name="NAMA"></td>
            <td>FOTO</td><td><input type="file" name="FOTO"></td>
            <td>PASSWORD</td><td><input type="password" name="PASS"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                        <select name="JK">
                            <option>Laki-Laki</option>
                            <option >Perempuan</option>
                        </select>
                <td>STATUS AKUN</td><td>
                        <select name="SA">
                            <option>Nonaktif</option>
                            <option>Aktif</option>
                        </select>
                    </td></tr>
            </table>
          
            <hr>
            <input type="submit" name="Tambah" value="Tambah" id="Tambah">
            <input type="submit" name="Edit" value="Edit" disabled>
            <input type="submit" name="Hapus" value="Hapus" disabled>
            <input type="submit" name="batal" id="Batal" value="Batal">
        </form>


          </div>
          </div>
<!-- Edit Data -->
<?php if(isset($_GET['id'])){
  include 'koneksi.php';
  $data = mysqli_query($koneksi, "select * from admin where ID_ADMIN = '" . $_GET['id'] . "'");
  while ($hasil = mysqli_fetch_array($data)) {
   $iid = $hasil['ID_ADMIN'];
   $nikk= $hasil['NIKADMIN'];
   $naama = $hasil['NAMAADMIN'];
   $levell = $hasil['LEVEL'];
   $usser = $hasil['USERNAME'];
   $passs = md5($hasil['PASSWORD']);
   $jeke= $hasil['JENIS_KELAMIN'];
   $stakun = $hasil['STATUS_AKUN'];
   $footo = $hasil['FOTO'];
  }
    ?>
    <hr>
      <div class="card mb-3"  id="rubah">
          <div class="card-header">
            <i class="fas fa-edit"></i>
            Perubahan Data Admin</div>
          <div class="card-body" >
        <form method="" action="" enctype="multipart/form-data">
            <table cellpadding="8">
            <td><input name="id" value="<?=$iid?>" disabled></td>
            <tr><td>NIK</td><td><input type="text" name="niik" value="<?=$nikk?>"></td>
            <td>LEVEL</td><td>
                        <select name="lvel">
                        <option><?=$levell?></option>
                          <option >
                          <?php
                          if($levell== "Administrator"){
                            echo "Petugas";
                          }else if($levell=="Petugas"){
                            echo "Administrator";
                          }else{
                            echo "";
                          }
                          ?>
  
                          </option>
                        </select>
                    </td> 
            
            <td>USERNAME</td><td><input type="text" name="useer" value="<?php echo $usser; ?> "></td></tr>
            <tr><td>NAMA</td><td><input type="text" name="namaa" value="<?php echo $naama; ?> "></td>
            <td>STATUS AKUN</td><td>
                        <select name="sak">
                        <option><?=$stakun?></option>
                          <option >
                          <?php
                          if($stakun== "Aktif"){
                            echo "Nonaktif";
                          }else if($stakun=="Nonaktif"){
                            echo "Aktif";
                          }else{
                            echo "";
                          }
                          ?>
  
                          </option>
                        </select>
                    </td>
            <td>PASSWORD</td><td><input type="password" name="passw"value="<?php echo $passs; ?> "></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                  <select name="jkl" >
                          <option><?=$jeke?></option>
                          <option >
                          <?php
                          if($jeke== "Laki-Laki"){
                            echo "Perempuan";
                          }else if($jeke=="Perempuan"){
                            echo "Laki-Laki";
                          }else{
                            echo "";
                          }
                          ?>
  
                          </option>
                  </select>

            <td>FOTO</td><td>
            <?php
            //tampilkan foto saat mau ngedit
              echo "<img src='images/$footo' width=50 height=50> <br/>";
            ?>
            <input name="fotoo" id="fotoo" type="file"/>
                </tr>
            </table>
          
            <hr>
            <input type="submit" value="Tambah" disabled>
            <input type="submit" name="Edit" value="Edit" id="btn_Edit">
            <input type="submit" name="Hapus" id="Hapus" value="Hapus">
            <input type="submit" name="Batal" id="batal" value="Batal">
        </form>

          </div>
          </div>
<?php } ?>
<hr>
          <div class="card mb-3" id="tabel">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Admin</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Status Akun</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Status Akun</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                  include 'koneksi.php';
                  $query = "select * from admin";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['ID_ADMIN']."</td>";
                    echo "<td>".$row['NIKADMIN']."</td>";
                    echo "<td>".$row['NAMAADMIN']."</td>";
                    echo "<td>".$row['JENIS_KELAMIN']."</td>";                  
                    echo "<td>".$row['USERNAME']."</td>";
                    echo "<td>".$row['PASSWORD']."</td>";
                    echo "<td>".$row['LEVEL']."</td>";
                    echo "<td>".$row['STATUS_AKUN']."</td>";
                    echo "<td><img src='images/".$row['FOTO']."' width='50' height='50'></td>";
                    echo "<td>"?><a class="fas fa-few fa-edit" id= "ubah" href="ubahadmin.php?id=<?php echo $row['ID_ADMIN']; ?>"></a> 
                              <a class="fas fa-few fa-trash" id= "Hapus" href="pdadmin.php?Hapus=delete&id=<?php echo $row['ID_ADMIN']; ?>" onClick = "return confirm(Apakah Anda ingin mengapus <?php echo $row['NAMAADMIN']; ?>)"></a></td>
                    </tr>
                    <?php   
                  }
                  ?> 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hentikan Aktivitas?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" jika Anda ingin mengakhiri aktivitas sebelumnya.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
