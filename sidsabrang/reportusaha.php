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
<title>SURAT TUSAHA</title>
</head>
<body>	
<?php
$year=date('Y');
include 'koneksi.php';
session_start();
$nosur=$_GET['nosur'];
$nik=$_SESSION['nik/id'];
$query2 = "SELECT * FROM sk_tempatusaha INNER JOIN penduduk ON sk_tempatusaha.NO_TUSAHA='$nosur' AND sk_tempatusaha.NIK_PENDUDUK=penduduk.NIK_PENDUDUK JOIN keluarga ON penduduk.NO_KK=keluarga.NO_KK and penduduk.NIK_PENDUDUK='$nik'";
            $sql2 = mysqli_query($koneksi, $query2);  // Eksekusi/Jalankan query dari variabel $query
            $dataa = mysqli_fetch_array($sql2);

$NO_TUSAHA = $dataa['NO_TUSAHA'];
$TGLSURATJU = $dataa['TGLSURATTU'];
$BERLAKU = $dataa['BERLAKUTU'];
$TUJUANTU = $dataa['TUJUANTU'];
$NAMAUSAHA = $dataa['NAMAUSAHA'];

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

<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">
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
      <td colspan="2"><div align="center"><strong><u>SURAT KETERANGAN TEMPAT USAHA</u></strong></div></td>
    </tr>
	<tr>
      <td colspan="2"><div align="center">Nomor : 474 /<?php echo $NO_TUSAHA;?>/35.09.12.2002/<?php echo $year;?></div></td>
    </tr>					
	<tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Button" value="Cetak" ONCLICK=Cetakan()></td>
    </tr>
</table>
<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Yang  bertanda tangan dibawah ini Saya Kepala Desa Sabrang,Kecamatan Ambulu, Kabupaten Jember , menerangkan dengan sebenarnya bahwa :</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>NIK</td>
      <td>&nbsp;:&nbsp;<?php echo $nik;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nama Lengkap</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['NAMAPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Dilahirkan</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['TEMPATLHR'];?>, <?php echo tgl_indo($dataa['TANGGALHR']);?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jenis Kelamin</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['JK_PEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Status Perkawinan</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['STATUSPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Agama</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['AGAMAPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pekerjaan</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['PEKERJAANPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Kewarganegaraan</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['KWNPEN'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat</td>
      <td>&nbsp;:&nbsp;<?php echo $dataa['ALAMAT'];?> 
      RT/RW <?php echo $dataa['RT_RW'];?> 
      Desa <?php echo $dataa['DESA'];?> 
      Kecamatan <?php echo $dataa['KEC'];?> 
      Kabupaten <?php echo $dataa['KAB_KOTA'];?>
      Provinsi <?php echo $dataa['PROV'];?> 
      <?php echo $dataa['KDPOS'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Masa Berlaku</td>
      <td>&nbsp;:&nbsp;<?php echo tgl_indo($TGLSURATJU); ?> sd <?php echo tgl_indo($BERLAKU); ?></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Yang bersangkutan benar-benar penduduk Desa Sabrang Kecamatan Ambulu Kabupaten Jember,  yang  sampai  saat  ini  masih  berdomisili  pada  alamat  tersebut di  atas.</td>
    </tr>
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Yang bersangkutan mempunyai usaha  <?php echo $dataa['NAMAUSAHA'];?>, yang sampai saat ini masih berjalan dengan baik dan lancar, surat keterangan ini akan dipergunakan untuk melengkapi persyaratan <?php echo $dataa['TUJUANTU']; ?>.</td>
    </tr>
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini saya buat dengan sebenarnya dan dapatnya dipergunakan sebagai mana mestinya dan selanjutnya untuk menjadikan periksa.
		</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
</table>
<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">
    <tr align="center">
      <td width="60%">&nbsp;</td>
      <td>Sabrang, <?php echo tgl_indo($TGLSURATJU); ?></td>	
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
      <td><strong>KEPALA DESA SABRANG</strong></td>	
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>	
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
      <td><strong><u>ZUBAERI LUTFI</u></strong></td>
    </tr>
    
</table>

</body>
</html>



