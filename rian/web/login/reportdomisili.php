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
<title>SURAT DOMISILI</title>
</head>
<body>	
<?php
$NO_DOMISILI = $_POST['NO_DOMISILI'];
$TGLSURATJU = $_POST['TGLSURATJU'];
$NAMAAJU = $_POST['NAMAAJU'];
$JKAJU = $_POST['JKAJU'];
$AGAMAAJU = $_POST['AGAMAAJU'];
$NIKPENGAJU = $_POST['NIKAJU'];
$TMPLHRAJU = $_POST['TMPLHRAJU'];
$TGLHRAJU = $_POST['TGLHRAJU'];
$STATUSAJU = $_POST['STATUSAJU'];
$PEKERJAANAJU = $_POST['PEKERJAANAJU'];
$ALAMATAJU = $_POST['ALAMATAJU'];
$RTRW = $_POST['RTRW'];
$KWNAJU = $_POST['KWNAJU'];
$TUJUANJU = $_POST['TUJUANJU'];
?>

<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">
	<tr>
    <td rowspan="4" width="15%" align="center"><img src="images/sabrang.png" width="100px"/></td>
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
      <td colspan="2"><div align="center"><strong><u>SURAT KETERANGAN DOMISILI</u></strong></div></td>
    </tr>
	<tr>
      <td colspan="2"><div align="center">Nomor : 474 /______________/35.09.12.2002/ </div></td>
    </tr>					
	<tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input type="button" name="Button" value="Cetak" ONCLICK=Cetakan()></td>
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
      <td>:&nbsp;<?php echo $NIKPENGAJU;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nama Lengkap</td>
      <td>:&nbsp;<?php echo $NAMAAJU;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tempat Tanggal Lahir</td>
      <td>:&nbsp;<?php echo "$TMPLHRAJU, "; echo $TGLHRAJU;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jenis Kelamin</td>
      <td>:&nbsp;<?php echo $JKAJU; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Status Perkawinan</td>
      <td>:&nbsp;<?php echo $STATUSAJU;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Agama</td>
      <td>:&nbsp;<?php echo $AGAMAAJU;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pekerjaan</td>
      <td>:&nbsp;<?php echo $PEKERJAANAJU;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Kewarganegaraan</td>
      <td>:&nbsp;<?php echo $KWNAJU; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat</td>
      <td>:&nbsp;<?php echo "$ALAMATAJU, " ; echo "RT/RW: $RTRW"; ?>,</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td> &nbsp;Desa Sabrang, Kecamatan Ambulu,</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td></td>
      <td> &nbsp;Kabupaten Jember</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut diatas benar benar penduduk Desa Sabrang Kecamatan 
				Ambulu, Kabupaten Jember, yang bersangkutan sampai saat ini masih berdomisili pada alamat tersebut diatas dan surat keterangan ini akan dipergunakan untuk persyaratan administrasi
				<?php echo $TUJUANJU ?>.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
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
    <tr>
      <td width="60%">&nbsp;</td>
      <td>Sabrang,<?php echo " $TGLSURATJU" ?></td>	
    </tr>
    <tr>
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
    <tr>
      <td>&nbsp;</td>
      <td><strong><u>ZUBAERI LUTFI</u></strong></td>
    </tr>
    
</table>
</body>
</html>



