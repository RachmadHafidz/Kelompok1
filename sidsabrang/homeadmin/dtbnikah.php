<?php
include 'koneksi.php';
session_start();
if($_SESSION['status']==""){
    header('location:../index.php?belum_login');
}
if(isset($_GET["gagal"])){
  echo "<script>alert('Gagal Menghapus Komentar!!');history.go(-1);</script>";
}elseif(isset($_GET["gagal_ubah"])){
  echo "<script>alert('Gagal Mengubah Keterangan!!');history.go(-1);</script>";
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

  <title>Halaman Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.php">Sistem Informasi Desa Sabrang</a>


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
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     
      <li class="nav-item dropdown no-arrow ">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i>Hello <?php echo $_SESSION['nama']; ?></i>
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <li> <a class="dropdown-item" href="profil.php">Profil</a></li>

          <li> <a class="dropdown-item" href="../indexlogin.php">Kembali Ke Website</a></li>
          
          <div class="dropdown-divider"></div>
          <li> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
        </ul>
      </div>
      </li>

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
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Surat Online</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Surat:</h6>
          <a class="dropdown-item" href="dtdomisili.php">SK Domisili</a>
          <a class="dropdown-item" href="dtbnikah.php">SK Belum Nikah</a>
          <a class="dropdown-item" href="dtskck.php">SK SKCK</a>
          <a class="dropdown-item" href="dtusaha.php">SK Tempat Usaha</a>
        </div>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Artikel</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Artikel:</h6>
          <a class="dropdown-item" href="artikel.php">Artikel</a>
          <a class="dropdown-item" href="artikelin.php">Tambah Artikel</a>
          <a class="dropdown-item" href="komentar.php">Komentar</a>

        </div>
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
          <li class="breadcrumb-item active">Surat Online</li>
          <li class="breadcrumb-item active">SK Belum Nikah</li>
        </ol>

          <!-- DataTables Example --> 
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Surat Pribadi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>No Surat</th>
                    <th>Tanggal Buat</th>
                    <th>NIK Penduduk</th>
                    <th>Tujuan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    <th>Validasi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>No Surat</th>
                    <th>Tanggal Buat</th>
                    <th>NIK Penduduk</th>
                    <th>Tujuan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    <th>Validasi</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                  include 'koneksi.php';
                  $query = "SELECT * from sk_belumnikah where JSBN='Surat Pribadi'";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['NO_BNIKAH']."</td>";
                    echo "<td>".$row['TGLSURATBN']."</td>";
                    echo "<td>".$row['NIK_PENDUDUK']."</td>";
                    echo "<td>".$row['TUJUANBN']."</td>";
                    echo "<td>".$row['KETERANGANBN']."</td>";
                    ?> <td><a onclick="return confirm('Apakah Anda Ingin Mencetak Surat ini?')" class="fas fa-few fa-download" href="reportbnikah.php?nosur=<?php echo $row['NO_BNIKAH'];?>&nik=<?php echo $row['NIK_PENDUDUK'];?>"></a> 
                          <a onclick="return confirm('Apakah Anda Ingin Menghapus Surat ini?')" class="fas fa-few fa-trash" href="hapusbnikah.php?nosur=<?php echo $row['NO_BNIKAH']?>"></a></td>
                          <?php if($row['KETERANGANBN']=="Sedang Proses"){?>
                          <td><a onclick="return confirm('Data Valid?')" class="fas fa-few fa-check-circle" href="vnik.php?nosur=<?php echo $row['NO_BNIKAH'];?>"></a> 
                          <a onclick="return confirm('Data Tidak Valid?')" class="fas fa-few fa-times-circle" href="tvnik.php?nosur=<?php echo $row['NO_BNIKAH']?>"></a></td>
                          <?php
                          }else if($row['KETERANGANBN']=="Valid"){
                          ?> 
                          <td><a onclick="return confirm('Selesai?')" class="fas fa-few fa-check-double" href="snik.php?nosur=<?php echo $row['NO_BNIKAH'];?>"></a></td>
                          <?php
                          }else if($row['KETERANGANBN']=="Tidak Valid"){
                          ?>
                          <td><a class="btn btn-danger" href="#" disabled>Tidak Valid</a></td>
                          <?php
                          }else if($row['KETERANGANBN']=="Selesai"){
                          ?>
                          <td><a class="btn btn-success" href="#" disabled>Selesai</a></td>
                          <?php
                          }
                          ?>  
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


        <!-- DataTables Example --> 
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Surat Perwakilan</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>No Surat</th>
                    <th>Tanggal Buat</th>
                    <th>NIK Penduduk</th>
                    <th>NIK Pengaju</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tujuan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    <th>Validasi</th>

                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>No Surat</th>
                    <th>Tanggal Buat</th>
                    <th>NIK Penduduk</th>
                    <th>NIK Pengaju</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tujuan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    <th>Validasi</th>

                  </tr>
                </tfoot>
                <tbody>
                <?php
                  include 'koneksi.php';
                  $query = "SELECT * from sk_belumnikah where JSBN='Surat Perwakilan'";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['NO_BNIKAH']."</td>";
                    echo "<td>".$row['TGLSURATBN']."</td>";
                    echo "<td>".$row['NIK_PENDUDUK']."</td>";
                    echo "<td>".$row['NIKBN']."</td>";
                    echo "<td>".$row['NAMABN']."</td>";
                    echo "<td>".$row['ALAMATBN']."</td>";
                    echo "<td>".$row['TUJUANBN']."</td>";
                    echo "<td>".$row['KETERANGANBN']."</td>";
                    ?> <td><a onclick="return confirm('Apakah Anda Ingin Mencetak Surat ini?')" class="fas fa-few fa-download" href="rbnikah.php?nosur=<?php echo $row['NO_BNIKAH'];?>&nik=<?php echo $row['NIKBN'];?>"></a> 
                          <a onclick="return confirm('Apakah Anda Ingin Menghapus Surat ini?')" class="fas fa-few fa-trash" href="hapusbnikah.php?nosur=<?php echo $row['NO_BNIKAH']?>"></a></td>
                          <?php if($row['KETERANGANBN']=="Sedang Proses"){?>
                          <td><a onclick="return confirm('Data Valid?')" class="fas fa-few fa-check-circle" href="vnik.php?nosur=<?php echo $row['NO_BNIKAH'];?>"></a> 
                          <a onclick="return confirm('Data Tidak Valid?')" class="fas fa-few fa-times-circle" href="tvnik.php?nosur=<?php echo $row['NO_BNIKAH']?>"></a></td>
                          <?php
                          }else if($row['KETERANGANBN']=="Valid"){
                          ?> 
                          <td><a onclick="return confirm('Selesai?')" class="fas fa-few fa-check-double" href="snik.php?nosur=<?php echo $row['NO_BNIKAH'];?>"></a></td>
                          <?php
                          }else if($row['KETERANGANBN']=="Tidak Valid"){
                          ?>
                          <td><a class="btn btn-danger" href="#" disabled>Tidak Valid</a></td>
                          <?php
                          }else if($row['KETERANGANBN']=="Selesai"){
                          ?>
                          <td><a class="btn btn-success" href="#" disabled>Selesai</a></td>
                          <?php
                          }
                          ?>   
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
