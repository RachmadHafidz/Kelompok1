<?php 
if (isset($_POST['Edit'])) {
  // Ambil Data yang Dikirim dari Form
      $no2= $_POST['no2'];
      $tgl2= $_POST['tgl2'];
      $admin2= $_POST['admin2'];
      $no2 = $_POST['no2'];
      $rt2 = $_POST['rt2'];
      $kab2 = $_POST['kab2'];
      $kepala2 = $_POST['kepala2'];
      $desa2 = $_POST['desa2'];
      $kdpos2 = $_POST['kdpos2'];
      $alamat2 = $_POST['alamat2'];
      $kec2 = $_POST['kec2'];
      $prov2 = $_POST['prov2'];

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
                      if($sql){
                        header('location: pdkeluarga.php');
                        } // Redirect ke halaman index.php
                        else{
                        header("location:pdkeluarga.php?Ubah_error");
                      }   
        } 
  }



if(isset($_GET['no_kk'])){
          include 'koneksi.php';
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
          <form method="post" action="" enctype="multipart/form-data">
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
            <input type="submit" name="btn_simpan" value="Simpan" disabled>
            <input type="submit" name="Edit" value="Edit" >
            <a href="pdkeluarga.php"><input type="button" value="Batal"></a>
        </form>
        </div>
        </div>
          <?php } ?>
        <hr>
