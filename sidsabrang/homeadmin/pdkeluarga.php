<?php
include 'koneksi.php';

function hapus_data($koneksi){
 if(isset($_GET['NO_KK']) && isset($_GET['aksi'])){
    $NO_KK = $_GET['NO_KK'];
    $query = "SELECT * FROM keluarga WHERE NO_KK='".$NO_KK."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql);

    $query2 = "DELETE FROM keluarga WHERE NO_KK='".$NO_KK."'";
    $sql2 = mysqli_query($koneksi, $query2);
  
    if($sql2){
      if($_GET['aksi'] == 'delete'){
        header('location:pdkeluarga.php');
      }else{
        $pesan = "Gagal menghapus data!";
      }
    }
  }
}

if(isset($_GET['aksi'])){
  switch($_GET['aksi']){
    case "create":
      navbarr($koneksi);
      tambah_data($koneksi);
      tabel_data($koneksi);
    break;
    case "read":
      navbarr($koneksi);
      tabel_data($koneksi);
    break;
    case "update":
      navbarr($koneksi);
      edit_data($koneksi);
      tabel_data($koneksi);
    break;
    case "delete":
      hapus_data($koneksi);
    break;
  }
}else{
    navbarr($koneksi);
    tambah_data($koneksi);
    tabel_data($koneksi);
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
  <title>Halaman Admin</title>

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
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li class="nav-item dropdown no-arrow ">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i>Hello <?php session_start(); echo $_SESSION['nama']; ?></i>
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
      <li class="nav-item dropdown active">
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
          <a class="dropdown-item" href="dtdomisili.php">SK Domisili</a>
          <a class="dropdown-item" href="dtbnikah.php">SK Belum Nikah</a>
          <a class="dropdown-item" href="dtskck.php">SK SKCK</a>
          <a class="dropdown-item" href="dtusaha.php">SK Tempat Usaha</a>
        </div>
      </li>
      <li class="nav-item dropdown">
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
    
        if(!empty($no) && !empty($tgl) && !empty($rt) && !empty($kepala) && !empty($alamat)){
          $query = "INSERT INTO keluarga VALUES('".$no."', '".$admin."', '".$tgl."', '".$kepala."', '".$alamat."', '".$rt."', '".$desa."' ,'".$kec."', '".$kab."', '".$kdpos."', '".$prov."')";
                      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                        if($sql && isset($_GET['aksi'])){ // Cek jika proses simpan ke database sukses atau tidak
                                // Jika Sukses, Lakukan :
                              if($_GET['aksi']=='create'){
                                header("location:pdkeluarga.php");
                         }else{
                          $pesan = "Tidak dapat menyimpan Data!";
                         }
                         } // Redirect ke halaman index.php
                        }else{
                          $pesan = "Tidak dapat menyimpan, Data tidak boleh kosong!";
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
                <td>ID ADMIN</td><td><input type="text" name="admin" readonly value="<?php echo $_SESSION['nik/id']; ?>"></td></tr>
            
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
        </form>
          </div>
          </div>
        <?php } ?>
        <hr>

        <!-- Edit Data -->

        <?php
        function edit_data($koneksi){
          if(isset($_POST['btn_edit'])){

            $NO_KK = $_GET['NO_KK'];
            $ID_ADMIN = $_POST['ID_ADMIN'];
            $TGL_DIBUAT = $_POST['TGL_DIBUAT'];
            $KEPALA = $_POST['KEPALA'];
            $ALAMAT = $_POST['ALAMAT'];
            $RT_RW = $_POST['RT_RW'];
            $DESA = $_POST['DESA'];
            $KEC = $_POST['KEC'];
            $KAB_KOTA = $_POST['KAB_KOTA'];
            $KDPOS = $_POST['KDPOS'];
            $PROV = $_POST['PROV'];

          if(!empty($TGL_DIBUAT) && !empty($RT_RW) && !empty($KEPALA) && !empty($ALAMAT)){
            $query = "SELECT * FROM keluarga WHERE NO_KK='".$NO_KK."'";
            $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
            $data = mysqli_fetch_array($sql);

            $query = "UPDATE keluarga SET ID_ADMIN='".$ID_ADMIN."', TGL_DIBUAT='".$TGL_DIBUAT."', KEPALA='".$KEPALA."', ALAMAT='".$ALAMAT."', RT_RW='".$RT_RW."', DESA='".$DESA."', KEC='".$KEC."', KAB_KOTA='".$KAB_KOTA."', KDPOS='".$KDPOS."', PROV='".$PROV."' WHERE NO_KK='".$NO_KK."'";
		        $sql = mysqli_query($koneksi, $query);
			      if($sql && isset($_GET['aksi'])){
			        	if($_GET['aksi'] == 'update'){
                  $pesan = "Data berhasil Diubah.";
				        }
		      	}else{
              $pesan = "Tidak dapat mengubah data!";
            }
        }else{
          $pesan = "Tidak dapat mengubah data, Data tidak boleh Kosong!";
        }


          }

          if(isset($_GET['NO_KK'])){
            $NO_KK = $_GET['NO_KK'];
            $query = "SELECT * FROM keluarga WHERE NO_KK='".$NO_KK."'";
            $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
            $data = mysqli_fetch_array($sql);
        ?>
        <div class="card mb-3">
        <div class="card-header" >
            <i class="fas fa-edit"></i>
            Perubahan Data Keluarga</div>
          <div class="card-body">
          <form method="post" action="" enctype="multipart/form-data">
          <a href="pdkeluarga.php"><input type="button" value="Tambah Data"></a>
          <hr>
            <table cellpadding="8">
            <tr><td>TANGGAL DIBUAT</td><td><input type="date" name="TGL_DIBUAT" value="<?php echo $data['TGL_DIBUAT']; ?>"></td>
                <td>ID ADMIN</td><td><input type="number" name="ID_ADMIN" readonly value="<?php echo $_SESSION['nik/id']; ?>"></td></tr>
            
            <tr><td>NO KK</td><td><input type="text" name="NO_KK" value="<?php echo $data['NO_KK']; ?>" readonly></td>
                <td>RT/RW</td><td><input type="text" name="RT_RW" value="<?php echo $data['RT_RW']; ?>"></td>
                <td>KAB/KOTA</td><td><input type="text" value="<?php echo $data['KAB_KOTA']; ?>" name="KAB_KOTA" readonly></td>
            </tr>
            <tr><td>KEPALA KELUARGA</td><td><input type="text" name="KEPALA" value="<?php echo $data['KEPALA']; ?>"></td>
                <td>DESA/KELURAHAN</td><td><input type="text" name="DESA" value="<?php echo $data['DESA']; ?>" readonly></td>
                <td>KODE POS</td><td><input type="text" name="KDPOS" value="<?php echo $data['KDPOS']; ?>" readonly></td>
            </tr>
            <tr><td>ALAMAT</td><td><input type="text" name="ALAMAT" value="<?php echo $data['ALAMAT']; ?>"></td>
                <td>KECAMATAN</td><td><input type="text" name="KEC" value="<?php echo $data['KEC']; ?>" readonly></td>
                <td>PROVINSI</td><td><input type="text" name="PROV" value="<?php echo $data['PROV']; ?>" readonly ></td>
            </tr>
            
          
            </table>
            <hr>
            <input type="submit" name="btn_edit" value="Edit">
            <a href="pdkeluarga.php"><input type="button" value="Batal"></a>
            <hr>
            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            
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
              <p><?php echo isset($pesan) ? $pesan : "" ?></p>
              <hr>
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
                <tfoot>
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
                </tfoot>
                <tbody>
                <?php
                  include 'koneksi.php';
                  $query = "select * from keluarga";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['NO_KK']."</td>";
                    echo "<td>".$row['TGL_DIBUAT']."</td>";
                    echo "<td>".$row['KEPALA']."</td>";
                    echo "<td>".$row['ALAMAT']."</td>";
                    echo "<td>".$row['RT_RW']."</td>";
                    echo "<td>".$row['DESA']."</td>";
                    echo "<td>".$row['KEC']."</td>";
                    echo "<td>".$row['KAB_KOTA']."</td>";
                    echo "<td>".$row['KDPOS']."</td>";
                    echo "<td>".$row['PROV']."</td>";
                    echo "<td>";?><a onclick="return confirm('Apakah Anda Ingin Menambahkan Anggota dari Keluarga?')" class="fas fa-few fa-plus"  href="pdpenduduk.php?no_kk=<?php echo $row['NO_KK']; ?>"></a> 
                          <a onclick="return confirm('Apakah Anda Ingin Mengubah Data ini?')" class="fas fa-few fa-edit" href="pdkeluarga.php?aksi=update&NO_KK=<?php echo $row['NO_KK']; ?>"></a> 
                          <a onclick="return confirm('Apakah Anda Ingin Mengubah Data ini?')" class="fas fa-few fa-trash" href="pdkeluarga.php?aksi=delete&NO_KK=<?php echo $row['NO_KK']; ?>"></a></td>
                    </tr>
                 <?php }
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
                <?php }?>

        

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
