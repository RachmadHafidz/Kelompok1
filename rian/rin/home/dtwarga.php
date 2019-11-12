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
  <style>
table {
  border-collapse: collapse;
  width: 100%;
}
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
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
          <span class="userpicture"><i title="Profile icon" class=" fa fa-user-circle-o"></i></span>
          <div <a class="dropdown-item" cursor= "pointer" href="#"><?php session_start(); echo $_SESSION['username']; ?></a></div>
          </li>
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
          <a class="dropdown-item" href="#">Penduduk</a>
          <a class="dropdown-item" href="#">Keluarga</a>
          <a class="dropdown-item" href="#">Admin</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Data:</h6>
          <a class="dropdown-item" href="dtpenduduk.php">Perangkat Desa</a>
          <a class="dropdown-item" href="dtkeluarga.php">Data Keluarga</a>
          <a class="dropdown-item" href="dtadmin.php">Data Admin</a>
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
          <li class="breadcrumb-item active">Penduduk</li>
        </ol>

        <!-- DataTables Example -->
        <?php 
include 'koneksi.php';
?>
         <div style="overflow-x:auto;">
              <table>
              <a href="http://localhost/Kelompok1/rian/rin/ubahdata/form_simpan.php">Tambah Data</a><br><br>
              <form method="post" action="dtwarga.php">
 <input type="text" name="search" placeholder="cari disini">
 <input type="submit" name="submit" value="search">


            </form>
                <thead>
                  <tr>
                    <th>Foto</th>
                    <th>NIK</th>
                    <th>NO KK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>RT/RW</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Kode Pos</th>
                    <th>Provinsi</th>
                    <th>Kewarganegaraan</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Tanggal Daftar</th>
                    <th>Level</th>
                    <th>Status</th>
                    
                    <th colspan="2">Aksi</th>
                  </tr>
                  
                  <?php
	// Load file koneksi.php
    include "koneksi.php";
    
    $search = $_POST['search'];
	$query = "SELECT * FROM warga WHERE NAMA LIKE '%$search%'"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td><img src='../ubahdata/images/".$data['FOTO']."' width='100' height='100'></td>";
		echo "<td>".$data['NIK']."</td>";
		echo "<td>".$data['NO_KK']."</td>";
        echo "<td>".$data['NAMA']."</td>";
        echo "<td>".$data['JENIS_KELAMIN']."</td>";
        echo "<td>".$data['TMP_LHR']."</td>";
        echo "<td>".$data['TGL_LHR']."</td>";
        echo "<td>".$data['AGAMA']."</td>";
        echo "<td>".$data['PENDIDIKAN']."</td>";
        echo "<td>".$data['PEKERJAAN']."</td>";
        echo "<td>".$data['ALAMAT']."</td>";
        echo "<td>".$data['RWRT']."</td>";
        echo "<td>".$data['DESA']."</td>";
        echo "<td>".$data['KECAMATAN']."</td>";
        echo "<td>".$data['KAB_KOTA']."</td>"; 
        echo "<td>".$data['KODE_POS']."</td>";
        echo "<td>".$data['PROVINSI']."</td>"; 
        echo "<td>".$data['KEWARGANEGARAAN']."</td>";   
        echo "<td>".$data['USERNAME']."</td>";
        echo "<td>".$data['PASSWORD']."</td>";
        echo "<td>".$data['TGL_DAFTAR']."</td>";
        echo "<td>".$data['LEVEL']."</td>"; 
        echo "<td>".$data['STATUS']."</td>";
      
	    echo "<td><a href=http://localhost/Kelompok1/rian/rin/ubahdata/form_ubah.php?NIK=".$data['NIK']."'>Ubah</a></td>";
		echo "<td><a href='http://localhost/Kelompok1/rian/rin/ubahdata/proses_hapus.php?NIK=".$data['NIK']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
                </tbody>
              </table>
            
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
