<?php
include "koneksi.php";

function hapus_data($koneksi){
 if(isset($_GET['no_kk']) && isset($_GET['aksi'])){
    $nokk = $_GET['no_kk'];
    $sql_hapus = "DELETE FROM keluarga WHERE NO_KK=" . $nokk;
    $hapus = mysqli_query($koneksi, $sql_hapus);
  
    if($hapus){
      if($_GET['aksi'] == 'delete'){
        header('location: pdkeluarga.php');
      }else{
        header('location: pdkeluarga.php?gagal_hapus');
      }
    }
  }
  

}

if(isset($_GET['aksi'])){
  switch($_GET['aksi']){
    case "create":
      navbar($koneksi);
      tambah_data($koneksi);
    break;
    case "read":
      navbar($koneksi);
      tabel_data($koneksi);
    break;
    case "update":
      navbar($koneksi);
      edit_data($koneksi);
      tabel_data($koneksi);
    break;
    case "delete":
      navbar($koneksi);
      hapus_data($koneksi);
    break;
  }
}else{
  navbar($koneksi);
    tambah_data($koneksi);
    tabel_data($koneksi);
  }



?>
<?php function navbar($koneksi){?>
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
          <div class="dropdown-item" href="profil.php">Hello 
                  <?php 
                  session_start();
                  echo $_SESSION['namaadmin']; ?></div>
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
          <li class="breadcrumb-item active">Pendaftaran Keluarga</li>
        </ol>

        <?php
}?>

<?php  
function tambah_data($koneksi){
  if (isset($_POST['btn_simpan'])) {
    // Ambil Data yang Dikirim dari Form
        $tgl= $_POST['tgl'];
        $admin= $_POST['admin'];
        $no = $_POST['no'];
        $rt = $_POST['rt'];
        $kab = $_POST['kab'];
        $kepala = $_POST['kepala'];
        $desa = $_POST['desa'];
        $kdpos = $_POST['kdpos'];
        $alamat = $_POST['alamat'];
        $kec = $_POST['kec'];
        $prov = $_POST['prov'];
    
        if(empty($no)){
          header("location:pdkeluarga.php?field_kosong");
        }else{
          $query = "INSERT INTO keluarga VALUES('".$no."', '".$admin."', '".$tgl."', '".$kepala."', '".$alamat."', '".$rt."', '".$desa."' ,'".$kec."', '".$kab."', '".$kdpos."', '".$prov."')";
                      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                        if($sql && isset($_GET['aksi'])){ // Cek jika proses simpan ke database sukses atau tidak
                                // Jika Sukses, Lakukan :
                              if($_GET['aksi']=='create'){
                                header("location: pdkeluarga.php");
                         } // Redirect ke halaman index.php
                        }else{
                          $pesan = "Tidak dapat menyimpan, data belum lengkap!";
                        }    
        }
      

  }
?>

        <!-- Tambah Data -->
        <div class="card mb-3" name="tambahkk" id="tambahkk">
          <div class="card-header" >
            <i class="fas fa-edit"></i>
            Pendaftaran Keluarga</div>
          <div class="card-body">
          <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="8">
            <tr><td>TANGGAL DIBUAT</td><td><input type="date" name="tgl"></td>
                <td>ID ADMIN</td><td><input type="number" name="admin" readonly value="<?php echo $_SESSION['idadmin']; ?>"></td></tr>
            
            <tr><td>NO KK</td><td><input type="text" name="no"
            <?php if(isset($_GET['no_kk'])){
              include 'koneksi.php';
              $data = mysqli_query($koneksi, "select * from keluarga where NO_KK = '" . $_GET['no_kk'] . "'");
              while ($hasil = mysqli_fetch_array($data)) {
              $nokk= $hasil['NO_KK']; 
            ?> value="<?=$nokk?>" <?php
              }
          }else{
            echo "value=''";
          }
            ?>
             >
            </td>
                <td>RT/RW</td><td><input type="text" name="rt"></td>
                <td>KAB/KOTA</td><td><input type="text" value="Jember" name="kab" readonly></td>
            </tr>
            <tr><td>KEPALA KELUARGA</td><td><input type="text" name="kepala"></td>
                <td>DESA/KELURAHAN</td><td><input type="text" name="desa" value="Sabrang" readonly></td>
                <td>KODE POS</td><td><input type="text" name="kdpos" value="68172" readonly></td>
            </tr>
            <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td>
                <td>KECAMATAN</td><td><input type="text" name="kec" value="Ambulu" readonly></td>
                <td>PROVINSI</td><td><input type="text" name="prov" value="Jawa Timur" readonly ></td>
            </tr>
            
          
            </table>
            <hr>
            <input type="submit" name="btn_simpan" value="Simpan" >
            <a href="pdkeluarga.php"><input type="button" value="Batal"></a>
            <hr>
            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            <hr>
        </form>
          </div>
          </div>
        <?php } ?>
        <hr>

        <!-- Edit Data -->

        <?php
        function edit_data($koneksi){
          if (isset($_POST['btn_ubah'])) {
            // Ambil Data yang Dikirim dari Form
                $no2= htmlspecialchars($_POST['no2']);
                $tgl2= htmlspecialchars($_POST['tgl2']);
                $admin2= htmlspecialchars($_POST['admin2']);
                $no2 = htmlspecialchars($_POST['no2']);
                $rt2 = htmlspecialchars($_POST['rt2']);
                $kab2 = htmlspecialchars($_POST['kab2']);
                $kepala2 = htmlspecialchars($_POST['kepala2']);
                $desa2 = htmlspecialchars($_POST['desa2']);
                $kdpos2 = htmlspecialchars($_POST['kdpos2']);
                $alamat2 = htmlspecialchars($_POST['alamat2']);
                $kec2 = htmlspecialchars($_POST['kec2']);
                $prov2 = htmlspecialchars($_POST['prov2']);
        
                if(empty($no2)){
                  header("location:pdkeluarga.php?field_kosong");
                }else{
                            $sql_update = "UPDATE keluarga SET 
                                          ID_ADMIN='$admin2', 
                                          NO_KK='$no2',
                                          TGL_BUAT='$tgl2', 
                                          KEPALA_KELUARGA='$kepala2',
                                          ALAMAT_KELURGA='$alamat2',
                                          RRT_RW='$rt2'
                                          WHERE NO_KK='$no2'";
                            $sql = mysqli_query($koneksi, $sql_update);
                            // Eksekusi/ Jalankan query dari variabel $query
                            if($sql && isset($_GET['aksi'])){ // Cek jika proses simpan ke database sukses atau tidak
                              // Jika Sukses, Lakukan :
                                      if($_GET['aksi']=='update'){
                                      header("location: pdkeluarga.php");
                                      }
                                  } // Redirect ke halaman index.php
                                  else{
                                  header("location:pdkeluarga.php?Ubah_error");
                                }   
                  } 
            }

          if(isset($_GET['no_kk'])){
          $data = mysqli_query($koneksi, "select * from keluarga where NO_KK = '" . $_GET['no_kk'] . "'");
          while ($hasil = mysqli_fetch_array($data)) {
            $tgl1= $hasil['TGL_DIBUAT'];
            $admin1= $hasil['ID_ADMIN'];
            $no1 = $hasil['NO_KK'];
            $rt1 = $hasil['RRT_RW'];
            $kab1 = $hasil['KAB_KOTA'];
            $kepala1 = $hasil['KEPALA_KELUARGA'];
            $desa1 = $hasil['DESA'];
            $kdpos1 = $hasil['KODE_POS'];
            $alamat1 = $hasil['ALAMAT_KELURGA'];
            $kec1 = $hasil['KEC'];
            $prov1 = $hasil['PROVINSI'];
          }
        ?>
        <div class="card mb-3" name="editkk" id="editkk">
        <div class="card-header" >
            <i class="fas fa-edit"></i>
            Perubahan Data Keluarga</div>
          <div class="card-body">
          <form method="post" action="pdkeluarga.php" enctype="multipart/form-data">
            <table cellpadding="8">
            <tr><td>TANGGAL DIBUAT</td><td><input type="date" name="tgl2" value="<?=$tgl1?>"></td>
                <td>ID ADMIN</td><td><input type="number" name="admin2" readonly value="<?php echo $_SESSION['idadmin']; ?>"></td></tr>
            
            <tr><td>NO KK</td><td><input type="text" name="no2" value="<?=$no1?>"></td>
                <td>RT/RW</td><td><input type="text" name="rt2" value="<?=$rt1?>"></td>
                <td>KAB/KOTA</td><td><input type="text" value="<?=$kab1?>" name="kab2" readonly></td>
            </tr>
            <tr><td>KEPALA KELUARGA</td><td><input type="text" name="kepala2" value="<?=$kepala1?>"></td>
                <td>DESA/KELURAHAN</td><td><input type="text" name="desa2" value="<?=$desa1?>" readonly></td>
                <td>KODE POS</td><td><input type="text" name="kdpos2" value="<?=$kdpos1?>" readonly></td>
            </tr>
            <tr><td>ALAMAT</td><td><input type="text" name="alamat2" value="<?=$alamat1?>"></td>
                <td>KECAMATAN</td><td><input type="text" name="kec2" value="<?=$kec1?>" readonly></td>
                <td>PROVINSI</td><td><input type="text" name="prov2" value="<?=$prov1?>" readonly ></td>
            </tr>
            
          
            </table>
            <hr>
            <input type="submit" name="btn_ubah" value="Edit" id="btn_ubah" >
            <a href="pdkeluarga.php"><input type="button" value="Batal"></a>
          <hr>
            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            <hr>
        </form>
        </div>
        </div>
          <?php }  
          
          


}?>
        <hr>

<?php function tabel_data($koneksi){?>
          <!-- Data Tabel -->
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No KK</th>
                    <th>Tanggal Buat</th>
                    <th>Kepala Keluarga</th>
                    <th>Alamat</th>
                    <th>RT/RW</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Kab/Kota</th>
                    <th>Kode Pos</th>
                    <th>Provinsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
               
                <tbody>
                <?php
                  include 'koneksi.php';
                  $query = "select * from keluarga";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['NO_KK']."</td>";
                    echo "<td>".$row['TGL_DIBUAT']."</td>";
                    echo "<td>".$row['KEPALA_KELUARGA']."</td>";
                    echo "<td>".$row['ALAMAT_KELURGA']."</td>";
                    echo "<td>".$row['RRT_RW']."</td>";
                    echo "<td>".$row['DESA']."</td>";
                    echo "<td>".$row['KEC']."</td>";
                    echo "<td>".$row['KAB_KOTA']."</td>";
                    echo "<td>".$row['KODE_POS']."</td>";
                    echo "<td>".$row['PROVINSI']."</td>";
                    echo "<td><a class='fas fa-few fa-plus' id= 'add' href='pdpenduduk.php?no_kk=".$row['NO_KK']."'></a> 
                          <a class='fas fa-few fa-edit' href='pdkeluarga.php?aksi=update&no_kk=".$row['NO_KK']."'></a> 
                          <a class='fas fa-few fa-trash' href='pdkeluarga.php?aksi=delete&no_kk=" .$row['NO_KK']."'></a></td>";
                    echo "</tr>";
                  }
                  ?> 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
                <?php 
}?>

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
