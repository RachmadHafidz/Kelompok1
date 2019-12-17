<?php
include 'koneksi.php';


if(isset($_GET['aksi'])){
  switch($_GET['aksi']){
    case "update":
      navbarr($koneksi);
      edit_data($koneksi);
    break;
  }
}else{
  navbarr($koneksi);
  tampil_data($koneksi);
}
?>

<?php function navbarr($koneksi){?>
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

  <style type="text/css">
        
            p {
                font-family: calibri, helvetica, sans-serif;
                color : red;
            }
        </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

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
          <span class="badge badge-danger"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow active">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i>Hello <?php session_start(); echo $_SESSION['nama']; ?></i>
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <li> <a class="dropdown-item" href="profil.php">Profil</a></li>
          <li> <a class="dropdown-item" href="http://localhost/Kelompok1/S.I.D/index1.php">Kembali Ke Website</a></li>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-table"></i>
          <span>Data Anggota</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Data:</h6>
        <?php
        if($_SESSION['levelad'] == "Super Admin"){
          echo "<a class='dropdown-item' href='pdpenduduk.php'>Data Penduduk</a>
          <a class='dropdown-item' href='pdkeluarga.php'>Data Keluarga</a>
          <a class='dropdown-item' href='pdadmin.php'> Data Admin</a>
          <a class='dropdown-item' href='pdpdesa.php'>Data Perangkat Desa</a>";
        }else if($_SESSION['levelad'] == "Admin"){
          echo "<a class='dropdown-item' href='pdpenduduk.php'>Data Penduduk</a>
          <a class='dropdown-item' href='pdkeluarga.php'>Data Keluarga</a>
          <a class='dropdown-item' href='pdpdesa.php'>Data Perangkat Desa</a>";
        }else if($_SESSION['levelad'] == "Perangkat Desa"){
          echo "<a class='dropdown-item' href='pdpenduduk.php'>Data Penduduk</a>
          <a class='dropdown-item' href='pdkeluarga.php'>Data Keluarga</a>";
        }
        ?>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Surat Online</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Surat:</h6>
          <a class="dropdown-item" href="#">SK Domisili</a>
          <a class="dropdown-item" href="#">SK Belum Nikah</a>
          <a class="dropdown-item" href="#">SK SKCK</a>
          <a class="dropdown-item" href="#">SK Tempat Usaha</a>
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
          <li class="breadcrumb-item active">Profil</li>
        </ol>
<?php } ?>
        <!-- DataTables Example -->
        <?php function tampil_data($koneksi){?>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i>
            Profil Anda</div>
          <div class="card-body">
          <?php

          $ID_ADMIN = $_SESSION['idadmin'];
          $query = "SELECT * FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
          $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
          $data = mysqli_fetch_array($sql);

          echo "<center>
                NIK           :  ".$data['NIK_NIPADMIN']." <hr>
                NAMA          :  ".$data['NAMAADMIN']." <hr>
                USERNAME      :  ".$data['USERNAME']." <hr>
                JENIS KELAMIN :  ".$data['JENIS_KELAMIN']." <hr>
                LEVEL         :  ".$data['LEVEL']." </center>"; 
                echo "
                <hr>
                <a href='profil.php?aksi=update&ID_ADMIN=".$data['ID_ADMIN']."'><input type='button' value='Ubah Password'></a>";
           ?>


            </div>
          </div>

      <?php } ?>

  <?php function edit_data($koneksi){
    if(isset($_POST['btn_ubah'])){

        $ID_ADMIN=$_GET['ID_ADMIN'];
        $pass1=md5($_POST['pass1']);
        $pass2=md5($_POST['pass2']);
        
        if($pass1>0 or $pass2>0){
          $sql_query="SELECT * FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
          $sql=mysqli_query($koneksi, $sql_query);
          $data=mysqli_fetch_array($sql);
      
        if($pass1==$pass2){
          $sql_update = "UPDATE admin SET `PASSWORD` = '$pass1' WHERE ID_ADMIN = $ID_ADMIN";
          $update = mysqli_query($koneksi, $sql_update);
          if($update && isset($_GET['aksi'])){
            if($_GET['aksi'] == 'update'){
              $pesan = "Password diubah";
            }else{
              $pesan = "Gagal Ubah Password!";
            }
        }
      }else{
        $pesan = "Konfirmasi harus sama!!";
      }
    }else{ 
      $pesan = "Password kosong!";
    }
    }
  
     if(isset($_GET['ID_ADMIN'])){?>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i>
            Ubah Password</div>
          <div class="card-body">
          <form method="post" action="" enctype="multipart/form-data">
          <center><table cellpadding="8">
          <tr><td>PASSWORD BARU </td><td><input type="password" name="pass1" ></td></tr>
          <tr><td>KONFIRMASI PASSWORD </td><td><input type="password" name="pass2" ></td></tr>
          </table></center>
          <hr>
          <center><input type="submit" name="btn_ubah" id="btn_ubah" value="Ubah">
          <a href="profil.php"><input type="button" value="Batal"></a>
          <hr>
            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
          </center>
          

          </form>

            </div>
          </div>
          

      <?php }} ?>
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