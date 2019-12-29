<?php
include 'koneksi.php';

function hapus_data($koneksi){
 if(isset($_GET['NIK_PENDUDUK']) && isset($_GET['aksi'])){
    $NIK_PENDUDUK = $_GET['NIK_PENDUDUK'];
    $query = "SELECT * FROM penduduk WHERE NIK_PENDUDUK='".$NIK_PENDUDUK."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql);

    $query2 = "DELETE FROM penduduk WHERE NIK_PENDUDUK='".$NIK_PENDUDUK."'";
    $sql2 = mysqli_query($koneksi, $query2);
  
    if($sql2){
      if($_GET['aksi'] == 'delete'){
        header('location:pdpenduduk.php');
      }else{
        $pesan = "Gagal menghapus data!";
      }
    }
  }
}
function aktif_nonaktif($koneksi){
  if(isset($_GET['NIK_PENDUDUK']) && isset($_GET['aksi'])){
     $NIK_PENDUDUK = $_GET['NIK_PENDUDUK'];
     $query = "SELECT * FROM penduduk WHERE NIK_PENDUDUK='".$NIK_PENDUDUK."'";
     $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
     $data = mysqli_fetch_array($sql);

     if($data['STATUSAKUN'] == 'Aktif'){
 
        $query_up = "UPDATE penduduk SET STATUSAKUN='Nonaktif' WHERE NIK_PENDUDUK='".$NIK_PENDUDUK."'";
        $sql_up = mysqli_query($koneksi, $query_up);
   
        if($sql_up){
        if($_GET['aksi'] == 'status'){
          header('location:pdpenduduk.php');
        }else{
         $pesan = "Gagal Aktivasi Akun!";
       }
     }
    }else if($data['STATUSAKUN']== 'Nonaktif'){
      $query_up2 = "UPDATE penduduk SET STATUSAKUN='Aktif' WHERE NIK_PENDUDUK='".$NIK_PENDUDUK."'";
     $sql_up2 = mysqli_query($koneksi, $query_up2);
   
     if($sql_up2){
       if($_GET['aksi'] == 'status'){
         header('location:pdpenduduk.php');
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
      hapus_data($koneksi);
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
          <li class="breadcrumb-item active">Pendaftaran Penduduk</li>
        </ol>

        <?php
}?>

<?php  
function tambah_data($koneksi){
  if (isset($_POST['btn_simpan'])) {
    // Ambil Data yang Dikirim dari Form
        $nik= $_POST['NIK'];
        $admin= $_POST['ADMIN'];
        $no = $_POST['NO_KK'];
        $nama= $_POST['NAMA'];
        $agama = $_POST['AGAMA'];
        $telp = $_POST['NOTELP'];
        $status = $_POST['STATUS'];
        $pend = $_POST['PENDIDIKAN'];
        $peker = $_POST['PEKERJAAN'];
        $pass = md5($_POST['PASSWORD']);
        $tmplhr = $_POST['TEMPAT'];
        $kwn = $_POST['KWN'];
        $tglhr = $_POST['TANGGAL'];
        $sa = $_POST['SA'];
        $jk = $_POST['JK'];
        $hidup = $_POST['HIDUP'];
    
        if(!empty($nik) && !empty($no) && !empty($pass) && !empty($telp)){
          $query = "INSERT INTO penduduk VALUES('".$nik."', '".$admin."', '".$no."', NOW(), '".$nama."', '".$tmplhr."', '".$tglhr."' ,'".$jk."', '".$agama."', '".$status."', '".$peker."' ,'".$pend."', '".$kwn."', '".$sa."', '".$hidup."' , '".$pass."', '".$telp."')";
                      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                        if($sql && isset($_GET['aksi'])){ // Cek jika proses simpan ke database sukses atau tidak
                                // Jika Sukses, Lakukan :
                              if($_GET['aksi']=='create'){
                                header("location:pdpenduduk.php");
                         }else{
                          $pesan = "Tidak dapat menyimpan Data!";
                         }
                         }
                        }else{
                          $pesan = "Tidak dapat menyimpan, Data tidak boleh kosong!";
                        }    

      

  }
?>

        <!-- Tambah Data -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Penduduk</div>
          <div class="card-body">
          <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="8">
            <tr>
            <td>ID ADMIN</td><td><input type="text" name="ADMIN" readonly value="<?php echo $_SESSION['nik/id']; ?>"></td>
            <td>AGAMA</td><td>
                        <select name="AGAMA">
                            <option>Islam</option>
                            <option >Kristen</option>
                            <option >Katolik</option>
                            <option >Budha</option>
                            <option >Hindu</option>
                            <option >Konghuchu</option>
                        </select>
            <td>NO TELEPON</td><td><input type="text" name="NOTELP"></td>
            </tr>
            <tr><td>NO KK</td><td>
            <select name='NO_KK'>
                
            <?php if(isset($_GET['no_kk'])){
              include 'koneksi.php';
              $data = mysqli_query($koneksi, "select * from keluarga where NO_KK = '" . $_GET['no_kk'] . "'");
              while ($hasil = mysqli_fetch_array($data)) {
                $nokk= $hasil['NO_KK']; 
                $kep= $hasil['KEPALA'];
            ?> <option value="<?=$nokk?>"><?=$nokk?></option> <?php
              }
          }else{
              echo "<option value='' selected='selected'>-</option>"; 
              include 'koneksi.php';
              $data = mysqli_query($koneksi, "select * from keluarga");
              while ($hasil = mysqli_fetch_array($data)) {
              $nokk= $hasil['NO_KK']; 
              $kep= $hasil['KEPALA'];?>
                        
               <option value="<?=$nokk?>"><?=$nokk?></option>
          <?php
              }
          }
            ?>
             </select>
            </td>
            <td>STATUS</td><td>
                        <select name="STATUS">
                            <option>Kawin</option>
                            <option >Belum Kawin</option>
                        </select>
            </tr>
            <tr><td>NIK</td><td><input type="text" name="NIK"></td>
            <td>PENDIDIKAN</td><td>
                        <select name="PENDIDIKAN">
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
                        </select></td>
            </tr>
            <tr><td>NAMA</td><td><input type="text" name="NAMA"></td>
            <td>PEKERJAAN</td><td><input type="text"  name="PEKERJAAN"></td>
            <td>PASSWORD</td><td><input type="password" name="PASSWORD"></td>
            </tr>
            <tr></tr><td>TEMPAT LAHIR</td><td><input type="text" name="TEMPAT" ></td>
            <td>KEWARGANEGARAAN</td><td><input type="text"  name="KWN" value="WNI" readonly></td>
            </tr>
            <tr><td>TANGGAL LAHIR<td><input type="date" name="TANGGAL"></td>
            <td>STATUS AKUN</td><td>
                        <select name="SA">
                            <option>Aktif</option>
                            <option >Nonaktif</option>
                        </select>
            </tr>
                
            
            <tr><td>JENIS KELAMIN</td><td>
                        <select name="JK">
                            <option>Laki-Laki</option>
                            <option >Perempuan</option>
                        </select>
                        <td>KETERANGAN</td><td>
                        <select name="HIDUP">
                            <option>Hidup</option>
                            <option >Meninggal</option>
                        </select>
            </tr>
            
          
            </table>
            <hr>
            <input type="submit" name="btn_simpan" value="Simpan">
            <a href="pdpenduduk.php"><input type="button" value="Batal"></a>
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

            $nik2= $_GET['NIK_PENDUDUK'];
            $admin2= $_POST['ID_ADMIN'];
            $no2 = $_POST['NO_KK'];
            $nama2= $_POST['NAMAPEN'];
            $agama2 = $_POST['AGAMAPEN'];
            $telp2 = $_POST['NOTELPEN'];
            $status2 = $_POST['STATUSPEN'];
            $pend2 = $_POST['PENDIDIKANPEN'];
            $peker2 = $_POST['PEKERJAANPEN'];
            $tmplhr2 = $_POST['TEMPATLHR'];
            $kwn2 = $_POST['KWNPEN'];
            $tglhr2 = $_POST['TANGGALHR'];
            $jk2 = $_POST['JK_PEN'];
            $hidup2 = $_POST['KET_HIDUP'];

          if(!empty($nik2) && !empty($no2) && !empty($telp2)){
            $query0 = "SELECT * FROM penduduk WHERE NIK_PENDUDUK='".$nik2."'";
            $sql0 = mysqli_query($koneksi, $query0); // Eksekusi/Jalankan query dari variabel $query
            $daata = mysqli_fetch_array($sql0);

            $sql_ubah = "UPDATE penduduk SET ID_ADMIN='".$admin2."', NO_KK='".$no2."', NAMAPEN='".$nama2."', AGAMAPEN='".$agama2."', NOTELPEN='".$telp2."', STATUSPEN='".$status2."', PENDIDIKANPEN='".$pend2."', PEKERJAANPEN='".$peker2."', TEMPATLHR='".$tmplhr2."', TANGGALHR='".$tglhr2."', KWNPEN='".$kwn2."', JK_PEN='".$jk2."', KET_HIDUP='".$hidup2."' WHERE NIK_PENDUDUK='".$nik2."'";
		        $ubah = mysqli_query($koneksi, $sql_ubah);
			      if($ubah && isset($_GET['aksi'])){
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

          if(isset($_GET['NIK_PENDUDUK'])){
            $nik = $_GET['NIK_PENDUDUK'];
            $query2 = "SELECT * FROM penduduk WHERE NIK_PENDUDUK='".$nik."'";
            $sql2 = mysqli_query($koneksi, $query2);  // Eksekusi/Jalankan query dari variabel $query
            $dataa = mysqli_fetch_array($sql2);
        ?>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Penduduk</div>
          <div class="card-body">
          <form method="post" action="" enctype="multipart/form-data">
          <a href="pdpenduduk.php"><input type="button" value="Tambah Data"></a>
          <hr>
            <table cellpadding="8">
            <tr>
            <td>ID ADMIN</td><td><input type="text" name="ID_ADMIN" readonly value="<?php echo $_SESSION['nik/id']; ?>"></td>
            <td>AGAMA</td><td>
                        <select name="AGAMAPEN">
                            <option><?php echo $dataa['AGAMAPEN']; ?></option>
                            <option>-</option>
                            <option>Islam</option>
                            <option >Kristen</option>
                            <option >Katolik</option>
                            <option >Budha</option>
                            <option >Hindu</option>
                            <option >Konghuchu</option>
                        </select></td>
            <td>NO TELEPON</td><td><input type="text" name="NOTELPEN" value="<?php echo $dataa['NOTELPEN']; ?>"></td>
            </tr>
            <tr><td>NO KK</td><td>
            <select name='NO_KK'>
              <option><?php echo $dataa['NO_KK']; ?></option>
              <option>-</option>
                
            <?php 
              include 'koneksi.php';
              $data = mysqli_query($koneksi, "select * from keluarga");
              while ($hasil = mysqli_fetch_array($data)) {
              $nokk= $hasil['NO_KK'];?>
                        
               <option value="<?=$nokk?>"><?=$nokk?></option>
              <?php
                  }
            ?>
             </select>
            </td>
            <td>STATUS</td><td>
                        <select name="STATUSPEN">
                        <option><?php echo $dataa['STATUSPEN']; ?></option>
                            <option>-</option>
                            <option>Kawin</option>
                            <option>Belum Kawin</option> 
                        </select></td>
            </tr>
            <tr><td>NIK</td><td><input readonly type="text" name="NIK_PENDUDUK" value="<?php echo $dataa['NIK_PENDUDUK']; ?>"></td>
            <td>PENDIDIKAN</td><td>
                        <select name="PENDIDIKANPEN">
                        <option><?php echo $dataa['PENDIDIKANPEN']; ?></option>
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
                        </select></td>
            </tr>
            <tr><td>NAMA</td><td><input type="text" name="NAMAPEN" value="<?php echo $dataa['NAMAPEN']; ?>"></td>
            <td>PEKERJAAN</td><td><input type="text"  name="PEKERJAANPEN" value="<?php echo $dataa['PEKERJAANPEN']; ?>"></td>
            </tr>
            <tr></tr><td>TEMPAT LAHIR</td><td><input type="text" name="TEMPATLHR" value="<?php echo $dataa['TEMPATLHR']; ?>" ></td>
            <td>KEWARGANEGARAAN</td><td><input readonly type="text"  name="KWNPEN" value="<?php echo $dataa['KWNPEN']; ?>"></td>
            </tr>
            <tr><td>TANGGAL LAHIR<td><input type="date" name="TANGGALHR" value="<?php echo $dataa['TANGGALHR']; ?>"></td>
            <td>KETERANGAN</td><td>
                        <select name="KET_HIDUP">
                        <option><?php echo $dataa['KET_HIDUP']; ?></option>
                            <option>-</option>
                            <option>Hidup</option>
                            <option>Meninggal</option>
                        </select></td>
            </tr>
                
            
            <tr><td>JENIS KELAMIN</td><td>
                        <select name="JK_PEN">
                        <option><?php echo $dataa['JK_PEN']; ?></option>
                            <option>-</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select></td>
                        
            </tr>
            
          
            </table>
            <hr>
            <input type="submit" name="btn_edit" value="Edit">
            <a href="pdpenduduk.php"><input type="button" value="Batal"></a>
            <hr>
            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
        </form>
          </div>
          </div>
        <?php }} ?>
        <hr>  
          


<?php function tabel_data($koneksi){?>
          <!-- Data Tabel -->
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Penduduk</div>
          <div class="card-body">
            <div class="table-responsive">
            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            <hr>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NIK</th>
                    <th>ID Admin</th>
                    <th>No KK</th>
                    <th>Daftar</th>
                    <th>Status Akun</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Pekerjaan</th>
                    <th>Pendidikan</th>
                    <th>Kewarganegaraan</th>
                    <th>No Telepon</th>
                    <th>Hidup</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>NIK</th>
                    <th>ID Admin</th>
                    <th>No KK</th>
                    <th>Tanggal Daftar</th>
                    <th>Status Akun</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Pekerjaan</th>
                    <th>Pendidikan</th>
                    <th>Kewarganegaraan</th>
                    <th>No Telepon</th>
                    <th>Hidup</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                  include 'koneksi.php';
                  $query = "select * from penduduk";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['NIK_PENDUDUK']."</td>";
                    echo "<td>".$row['ID_ADMIN']."</td>";
                    echo "<td>".$row['NO_KK']."</td>";
                    echo "<td>".$row['TGLDAFTAR']."</td>";
                    echo "<td>".$row['STATUSAKUN']."</td>";
                    echo "<td>".$row['NAMAPEN']."</td>";
                    echo "<td>".$row['TEMPATLHR']."</td>";
                    echo "<td>".$row['TANGGALHR']."</td>";
                    echo "<td>".$row['JK_PEN']."</td>";
                    echo "<td>".$row['AGAMAPEN']."</td>";
                    echo "<td>".$row['STATUSPEN']."</td>";
                    echo "<td>".$row['PEKERJAANPEN']."</td>";
                    echo "<td>".$row['PENDIDIKANPEN']."</td>";
                    echo "<td>".$row['KWNPEN']."</td>";
                    echo "<td>".$row['NOTELPEN']."</td>";
                    echo "<td>".$row['KET_HIDUP']."</td>";?>
                    <td><a onclick="return confirm('Apakah Anda Ingin Mengubah Akses Akun ini?')" class="fas fa-few fa-ban" href="pdpenduduk.php?aksi=status&NIK_PENDUDUK=<?php echo $row['NIK_PENDUDUK']; ?>"> </a>
                              <a onclick="return confirm('Apakah Anda Ingin Mengubah Data ini?')" class="fas fa-few fa-edit" href="pdpenduduk.php?aksi=update&NIK_PENDUDUK=<?php echo $row['NIK_PENDUDUK']; ?>"></a> 
                              <a onclick="return confirm('Apakah Anda Ingin Menghapus Akun ini?')" class="fas fa-few fa-trash" href="pdpenduduk.php?aksi=delete&NIK_PENDUDUK=<?php echo $row['NIK_PENDUDUK']; ?>"></a></td>
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
