<html>
<head>
<script language="JavaScript">
function Cetakan()
{
 document.all.Button.style.visibility="hidden";
 window.print();
 alert("Jangan di tekan tombol OK sebelum dokumen selesai tercetak!");
 document.all.Button.style.visibility="visible";
}
</script>
<title>DATA PENDUDUK</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body>	
<?php
$year=date('Y');

include 'koneksi.php';

$no=$_POST['nomorkk'];
$kueri = mysqli_query($koneksi, "SELECT * from keluarga where NO_KK='$no'");
$hasil1 = mysqli_fetch_array($kueri);

?>
<?php
        function tgl_indo($tanggal){
	      $bulan = array (
		    1 =>   'Januari',
		    'Februari',
		    'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
      );
            $pecahkan = explode('-', $tanggal);
            
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
          
            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
          }
          ?>
<!-- Data Tabel -->

<table width="80%" border="0" align="center">
	<tr>
    <td rowspan="4" width="15%" align="center"><img src="img/surat/Jember.png" width="120px"/></td>
    <td align="center" style="font-size:18px"><strong>PEMERINTAH KABUPATEN JEMBER</strong></td>
    </tr>
	<tr>
	  <td align="center" style="font-size:18px"><strong>KECAMATAN AMBULU</strong></td>
  </tr>
  <tr>
	  <td align="center" style="font-size:18px"><strong>DESA SABRANG</strong></td>
  </tr>
	<tr>
	  <td align="center">JL. Watu Ulo No.01 Telp: 081 249 065 993 kode Pos 68172</td>
  </tr>
</table>
<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">
<tr>
	<td colspan="2"><hr/></td>
	</tr>
	<tr>
      <td colspan="2" style="font-size:22px"><div align="center"><strong>Data Penduduk Berdasarkan Keluarga</strong></div></td>
    </tr>					
	<tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" style="font-size:22px"><div align="center"><strong><?php echo $hasil1['NO_KK'];?></strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Button" value="Cetak" ONCLICK=Cetakan()></td>
    </tr>
    
</table>
<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">

    <tr>
      <td>&nbsp;</td>
      <td>Kepala Keluarga</td>
      <td>:&nbsp;&nbsp;<?php echo $hasil1['KEPALA'];?></td>
      <td>Kecamatan</td>
      <td>:&nbsp;&nbsp;<?php echo $hasil1['KEC'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat</td>
      <td>:&nbsp;&nbsp;<?php echo $hasil1['ALAMAT'];?></td>
      <td>Kabupaten/Kota</td>
      <td>:&nbsp;&nbsp;<?php echo $hasil1['KAB_KOTA'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>RT/RW</td>
      <td>:&nbsp;&nbsp;<?php echo $hasil1['RT_RW'];?></td>
      <td>Kode Pos</td>
      <td>:&nbsp;&nbsp;<?php echo $hasil1['KDPOS'];?></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;</td>
      <td>Desa/Kelurahan</td>
      <td>:&nbsp;&nbsp;<?php echo $hasil1['DESA'];?></td>
      <td>Provinsi</td>
      <td>:&nbsp;&nbsp;<?php echo $hasil1['PROV']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td> 
    </tr>
    </table>
            <table class="table table-bordered" id="dataTable" width="60%" border="0" align="center">
            <tr>
                    <th>NIK</th>
                    <th>No KK</th>
                    <th>Tanggal Daftar</th>
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
                    <th>Ket Hidup</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                  include 'koneksi.php';
                  $query = "select * from penduduk where NO_KK=$no";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['NIK_PENDUDUK']."</td>";
                    echo "<td>".$row['NO_KK']."</td>";
                    echo "<td>".tgl_indo($row['TGLDAFTAR'])."</td>";
                    echo "<td>".$row['NAMAPEN']."</td>";
                    echo "<td>".$row['TEMPATLHR']."</td>";
                    echo "<td>".tgl_indo($row['TANGGALHR'])."</td>";
                    echo "<td>".$row['JK_PEN']."</td>";
                    echo "<td>".$row['AGAMAPEN']."</td>";
                    echo "<td>".$row['STATUSPEN']."</td>";
                    echo "<td>".$row['PEKERJAANPEN']."</td>";
                    echo "<td>".$row['PENDIDIKANPEN']."</td>";
                    echo "<td>".$row['KWNPEN']."</td>";
                    echo "<td>".$row['NOTELPEN']."</td>";
                    echo "<td>".$row['KET_HIDUP']."</td>";?>
                     </tr>
                 <?php }
                  ?> 
        </div>
    
</table>

</body>
</html>



