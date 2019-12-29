<?php
include 'koneksi.php';
session_start();
if($_SESSION['status']==""){
    header('location:../index.php?belum_login');
}

function delete_data($koneksi){
 if(isset($_GET['ID_ADMIN']) && isset($_GET['aksi'])){
    $ID_ADMIN = $_GET['ID_ADMIN'];
    $query = "SELECT * FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql);
    if(is_file("images/".$data['FOTO'])) // Jika foto ada
    unlink("images/".$data['FOTO']);

        $query2 = "DELETE FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
        $sql2 = mysqli_query($koneksi, $query2);
  
        if($sql2){
          if($_GET['aksi'] == 'delete'){
              header('location:pdadmin.php');
          }else{
              $pesan = "Gagal menghapus data!";
          }
        }   
    }

}
function aktif_nonaktif($koneksi){
  if(isset($_GET['ID_ADMIN']) && isset($_GET['aksi'])){
     $ID_ADMIN = $_GET['ID_ADMIN'];
     $query = "SELECT * FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
     $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
     $data = mysqli_fetch_array($sql);

     if($data['STATUS_AKUN'] == 'Aktif'){
 
        $query_up = "UPDATE admin SET STATUS_AKUN='Nonaktif' WHERE ID_ADMIN='".$ID_ADMIN."'";
        $sql_up = mysqli_query($koneksi, $query_up);
   
        if($sql_up){
        if($_GET['aksi'] == 'status'){
          header('location:pdadmin.php');
        }else{
         $pesan = "Gagal Aktivasi Akun!";
       }
     }
    }else if($data['STATUS_AKUN']== 'Nonaktif'){
      $query_up2 = "UPDATE admin SET STATUS_AKUN='Aktif' WHERE ID_ADMIN='".$ID_ADMIN."'";
     $sql_up2 = mysqli_query($koneksi, $query_up2);
   
     if($sql_up2){
       if($_GET['aksi'] == 'status'){
         header('location:pdadmin.php');
       }else{
         $pesan = "Gagal Mengubah Aktivasi Akun!";
       }
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
      ubah_data($koneksi);
      tabel_data($koneksi);
    break;
    case "delete":
      delete_data($koneksi);
    break;
    case "status":
      aktif_nonaktif($koneksi);
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-file"></i>
          <span>Laporan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Data:</h6>
          <a class="dropdown-item" href="lapenduduk.php">Data Penduduk</a>
          <a class="dropdown-item" href="lapkeluarga.php">Data Keluarga</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pkModal">Penduduk & Keluarga</a>
        </div>
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

        <?php
}?>

<?php  
function tambah_data($koneksi){
  if (isset($_POST['btn_simpan'])) {
    // Ambil Data yang Dikirim dari Form
        $id= $_POST['ID_ADMIN'];
        $nama= $_POST['NAMAADMIN'];
        $tahun= $_POST['TAHUN_JABATAN'];
        $user = $_POST['USERNAME'];
        $foto = $_FILES['FOTO']['name'];
        $tmp = $_FILES['FOTO']['tmp_name'];
        $niknip = $_POST['NIK_NIPADMIN'];
        $akhir = $_POST['BERAKHIR_JABATAN'];
        $pass = md5($_POST['PASSWORD']);
        $jk = $_POST['JENIS_KELAMIN'];
        $telp = $_POST['NOTELP'];
        $lev = $_POST['LEVEL'];
        $jab = $_POST['JABATAN'];
        $sa = $_POST['STATUS_AKUN'];

        $fotobaru = date('dmYHis').$foto;
        $path = "images/".$fotobaru;
    
        if(move_uploaded_file($tmp, $path)){

          if(!empty($id) && !empty($nama) && !empty($user) && !empty($pass) && !empty($telp)){
          $query = "INSERT INTO admin VALUES('".$id."', '".$niknip."', '".$nama."', '".$jk."', '".$jab."', '".$tahun."', '".$akhir."' ,'".$lev."', '".$sa."', '".$telp."', '".$user."', '".$pass."', '".$fotobaru."')";
                      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                        if($sql && isset($_GET['aksi'])){ // Cek jika proses simpan ke database sukses atau tidak
                                // Jika Sukses, Lakukan :
                              if($_GET['aksi']=='create'){
                                header("location:pdadmin.php");
                              }else{
                                  $pesan = "Tidak dapat menyimpan Data!";
                              }
                         }
                         }else{
                          $pesan = "Data tidak boleh kosong!!"; // Redirect ke halaman index.php
                         }
                        }else{
                          $pesan = "Gagal Unggah Foto!!";
                        }    
  }
?>

        <!-- Tambah Data -->
        <div class="card mb-3" name="tambahkk" id="tambahkk">
          <div class="card-header" >
            <i class="fas fa-edit"></i>
            Pendaftaran Admin</div>
          <div class="card-body">
          <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="8">
            <?php
              $kueri1="SELECT max(ID_ADMIN) as maxKode FROM admin";
              $hasil1= mysqli_query($koneksi, $kueri1);
              $tabel1 = mysqli_fetch_array($hasil1);
              $ID_ADMIN5= $tabel1['maxKode'];

              $noUrut1 = (int) substr($ID_ADMIN5, 2, 4);
              $noUrut1++;

              $char1="AD";
              $ID_ADMIN5= $char1 . sprintf("%04s", $noUrut1);
            ?>


            <tr><td>ID ADMIN</td><td><input type="text" name="ID_ADMIN" value="<?php echo $ID_ADMIN5; ?>" readonly></td>
                <td>JABATAN</td><td><input type="text" name="JABATAN"></td>
                <td>LEVEL</td><td><input type="text" name="LEVEL" value="Admin" readonly>
                  </td>
                
            </tr>
            <tr><td>NIK/NIP</td><td><input type="text" name="NIK_NIPADMIN"></td>
                <td>TAHUN JABATAN</td><td><input type="date" name="TAHUN_JABATAN"></td>
                <td>USERNAME</td><td><input type="text" name="USERNAME"></td>
                <td>FOTO</td><td><input type="file" name="FOTO"></td>
            </tr>
            <tr><td>NAMA</td><td><input type="text" name="NAMAADMIN"></td>
                <td>BERAKHIR JABATAN</td><td><input type="date" name="BERAKHIR_JABATAN"></td>
                <td>PASSWORD</td><td><input type="password" name="PASSWORD"></td>
                
            </tr>
            <tr><td>JENIS KELAMIN</td><td>
                        <select name="JENIS_KELAMIN">
                            <option>Laki-Laki</option>
                            <option >Perempuan</option>
                        </select></td>
                <td>NO TELEPON</td><td><input type="text" name="NOTELP"></td>
                
                <td>STATUS AKUN</td><td>
                        <select name="STATUS_AKUN">
                            <option>Aktif</option>
                            <option >Nonaktif</option>
                        </select></td>
            </tr>
            
          
            </table>
            <hr>
            <input type="submit" name="btn_simpan" value="Simpan" >
            <a href="pdadmin.php"><input type="button" value="Batal"></a>
            <hr>
            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
        </form>
          </div>
          </div>
        <?php } ?>
        <hr>

        <!-- Edit Data -->

        <?php
        function ubah_data($koneksi){
          if(isset($_POST['btn_edit'])){

            $ID_ADMIN = $_GET['ID_ADMIN'];
            $nama1 = $_POST['NAMAADMIN1'];
            $tahun1 = $_POST['TAHUN_JABATAN1'];
            $user1 = $_POST['USERNAME1'];
            $niknip1 = $_POST['NIK_NIPADMIN1'];
            $akhir1 = $_POST['BERAKHIR_JABATAN1'];
            $jk1 = $_POST['JENIS_KELAMIN1'];
            $telp1 = $_POST['NOTELP1'];
            $lev1 = $_POST['LEVEL1'];
            $jab1 = $_POST['JABATAN1'];
            $sa1 = $_POST['STATUS_AKUN1'];

            if(isset($_POST['ubah_foto'])){
              $foto = $_FILES['FOTO1']['name'];
	            $tmp = $_FILES['FOTO1']['tmp_name'];
	            $fotobaru = date('dmYHis').$foto;
              $path = "images/".$fotobaru;
              
              if(move_uploaded_file($tmp, $path)){
                $query = "SELECT * FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
		            $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
                $data = mysqli_fetch_array($sql);
                  if(is_file("images/".$data['FOTO'])) // Jika foto ada
			            unlink("images/".$data['FOTO']);

                  if(!empty($nama1) && !empty($user1) && !empty($telp1)){
                    $query_up = "UPDATE admin SET NIK_NIPADMIN='".$niknip1."', NAMAADMIN='".$nama1."', JENIS_KELAMIN='".$jk1."', JABATAN='".$jab1."', TAHUN_JABATAN='".$tahun1."', BERAKHIR_JABATAN='".$akhir1."', USERNAME='".$user1."', LEVEL='".$lev1."', FOTO='".$fotobaru."', STATUS_AKUN='".$sa1."', NOTELP='".$telp1."' WHERE ID_ADMIN='".$ID_ADMIN."'";
		                $sql_up = mysqli_query($koneksi, $query_up);
			              if($sql_up && isset($_GET['aksi'])){
                        if($_GET['aksi'] == 'update'){
                            $pesan = "Data berhasil Diubah.";
                        }else{
                          $pesan = "Tidak dapat mengubah data!";
                      }
                        }else{
                            $pesan = "Tidak dapat mengubah data!";
                        }
                  }else{
                    $pesan = "Tidak dapat mengubah data, Data tidak boleh Kosong!";
                  }
              }
            }else{
              $query = "SELECT * FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
              $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
              $data = mysqli_fetch_array($sql);
              if(!empty($nama1) && !empty($user1) && !empty($telp1)){
                $query_up = "UPDATE admin SET NIK_NIPADMIN='".$niknip1."', NAMAADMIN='".$nama1."', JENIS_KELAMIN='".$jk1."', JABATAN='".$jab1."', TAHUN_JABATAN='".$tahun1."', BERAKHIR_JABATAN='".$akhir1."', USERNAME='".$user1."', LEVEL='".$lev1."', STATUS_AKUN='".$sa1."', NOTELP='".$telp1."' WHERE ID_ADMIN='".$ID_ADMIN."'";
                $sql_up = mysqli_query($koneksi, $query_up);
                if($sql_up && isset($_GET['aksi'])){
                    if($_GET['aksi'] == 'update'){
                        $pesan = "Data berhasil Diubah.";
                    }else{
                      $pesan = "Tidak dapat mengubah data!";
                  }
                    }else{
                        $pesan = "Tidak dapat mengubah data!";
                    }
              }else{
                $pesan = "Tidak dapat mengubah data, Data tidak boleh Kosong!";
              }
            }
          }

          if(isset($_GET['ID_ADMIN'])){
            $ID_ADMIN = $_GET['ID_ADMIN'];
            $query = "SELECT * FROM admin WHERE ID_ADMIN='".$ID_ADMIN."'";
            $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
            $data = mysqli_fetch_array($sql);
        ?>
        <div class="card mb-3">
        <div class="card-header" >
            <i class="fas fa-edit"></i>
            Perubahan Data Admin</div>
          <div class="card-body">
          <form method="post" action="" enctype="multipart/form-data">
          <a href="pdadmin.php"><input type="button" value="Tambah Data"></a>
          <hr>
          <table cellpadding="8">
            <tr><td>ID ADMIN</td><td><input name="ID_ADMIN1" value="<?php echo $data['ID_ADMIN']; ?>" readonly></td>
                <td>JABATAN</td><td><input type="text" name="JABATAN1" value="<?php echo $data['JABATAN']; ?>"></td>
            </tr>
            <tr><td>NIK/NIP</td><td><input type="text" name="NIK_NIPADMIN1" value="<?php echo $data['NIK_NIPADMIN']; ?>"></td>
                <td>TAHUN JABATAN</td><td><input type="date" name="TAHUN_JABATAN1" value="<?php echo $data['TAHUN_JABATAN']; ?>"></td>
                <td>USERNAME</td><td><input type="text" name="USERNAME1" value="<?php echo $data['USERNAME']; ?>"></td>
                <td>FOTO</td><td><td>
                                  <input type="file" name="FOTO1"><br>
                                  <input type="checkbox" name="ubah_foto" value="true"> Ubah Foto
			                            </td>
            </tr>
            <tr><td>NAMA</td><td><input type="text" name="NAMAADMIN1" value="<?php echo $data['NAMAADMIN']; ?>"></td>
                <td>BERAKHIR JABATAN</td><td><input type="date" name="BERAKHIR_JABATAN1" value="<?php echo $data['BERAKHIR_JABATAN']; ?>"></td>
                <td>LEVEL</td><td><input type="text" name="LEVEL1" value="<?php echo $data['LEVEL']; ?>" readonly>
                  </td>
            </tr>
            <tr><td>JENIS KELAMIN</td><td>
                        <select name="JENIS_KELAMIN1">
                        <option><?php echo $data['JENIS_KELAMIN']; ?></option>
                            <option>-</option>
                            <option>Laki-Laki</option>
                            <option >Perempuan</option>
                        </select></td>
                <td>NO TELEPON</td><td><input type="text" name="NOTELP1" value="<?php echo $data['NOTELP']; ?>"></td>
                
                <td>STATUS AKUN</td><td>
                        <select name="STATUS_AKUN1">
                            <option><?php echo $data['STATUS_AKUN']; ?></option>
                            <option>-</option>
                            <option>Aktif</option>
                            <option >Nonaktif</option>
                        </select></td>
            </tr>
            
          
            </table>
            <hr>
            <input type="submit" name="btn_edit" value="Edit">
            <a href="pdadmin.php"><input type="button" value="Batal"></a>
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
          <div class="card mb-3" id="tabel">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Admin</div>
          <div class="card-body">
            <div class="table-responsive">
            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            <hr>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NIK/NIP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Tahun Jabatan</th>
                    <th>Berakhir Jabatan</th>
                    <th>No Telepon</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Status Akun</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>NIK/NIP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Tahun Jabatan</th>
                    <th>Berakhir Jabatan</th>
                    <th>No Telepon</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Status Akun</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                  include 'koneksi.php';
                  $query = "SELECT * from admin where LEVEL='Admin'";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['ID_ADMIN']."</td>";
                    echo "<td>".$row['NIK_NIPADMIN']."</td>";
                    echo "<td>".$row['NAMAADMIN']."</td>";
                    echo "<td>".$row['JENIS_KELAMIN']."</td>";
                    echo "<td>".$row['JABATAN']."</td>";
                    echo "<td>".$row['TAHUN_JABATAN']."</td>";
                    echo "<td>".$row['BERAKHIR_JABATAN']."</td>";
                    echo "<td>".$row['NOTELP']."</td>";              
                    echo "<td>".$row['USERNAME']."</td>";
                    echo "<td>".$row['LEVEL']."</td>";
                    echo "<td>".$row['STATUS_AKUN']."</td>";
                    echo "<td><img src='images/".$row['FOTO']."' width='50' height='50'></td>";
                    echo "<td>"?><a onclick="return confirm('Apakah Anda Ingin Mengubah Akses Akun ini?')" class="fas fa-few fa-ban" href="pdadmin.php?aksi=status&ID_ADMIN=<?php echo $row['ID_ADMIN']; ?>"> </a>
                              <a onclick="return confirm('Apakah Anda Ingin Mengubah Data ini?')" class="fas fa-few fa-edit" href="pdadmin.php?aksi=update&ID_ADMIN=<?php echo $row['ID_ADMIN']; ?>"></a> 
                              <a onclick="return confirm('Apakah Anda Ingin Menghapus Akun ini?')" class="fas fa-few fa-trash" href="pdadmin.php?aksi=delete&ID_ADMIN=<?php echo $row['ID_ADMIN']; ?>"></a></td>
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
 <!-- Laporan Modal-->
 <div class="modal fade" id="pkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Masukkan NO KK</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form class="modal-body" method="post" action="lapenkel.php">
          <div class="form-group">
            <label>NO KK</label>
            <input type="text" name="nomorkk" id="nomorkk" class="form-control" onkeyup="isi_otomatis()" required>
          </div>
          <hr>
          <input type="submit" name="cetak" value="Cetak" class="btn btn-primary">
        </form>
        <script type="text/javascript">
            function isi_otomatis(){
                var NO_KK = $("#NO_KK").val();
                $.ajax({
                    url: 'prosesajax.php',
                    data:"NO_KK="+NO_KK ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#KEPALA').val(obj.KEPALA);
                });
            }
        </script>
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
