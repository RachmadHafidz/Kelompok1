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
<title>DATA KELUARGA</title>
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
      <td colspan="2" style="font-size:22px"><div align="center"><strong>DATA KELUARGA</strong></div></td>
    </tr>					
	<tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Button" value="Cetak" ONCLICK=Cetakan()></td>
    </tr>
</table>
            <table class="table table-bordered" id="dataTable" width="60%" border="0" align="center">
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
                  </tr>
                <?php
                  include 'koneksi.php';
                  $query = "select * from keluarga";
                  $sql = mysqli_query($koneksi, $query);
                  while ($row=mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row['NO_KK']."</td>";
                    echo "<td>".tgl_indo($row['TGL_DIBUAT'])."</td>";
                    echo "<td>".$row['KEPALA']."</td>";
                    echo "<td>".$row['ALAMAT']."</td>";
                    echo "<td>".$row['RT_RW']."</td>";
                    echo "<td>".$row['DESA']."</td>";
                    echo "<td>".$row['KEC']."</td>";
                    echo "<td>".$row['KAB_KOTA']."</td>";
                    echo "<td>".$row['KDPOS']."</td>";
                    echo "<td>".$row['PROV']."</td>";
                    ?>
                     </tr>
                 <?php }
                  ?> 
        </div>
    
</table>

</body>
</html>



