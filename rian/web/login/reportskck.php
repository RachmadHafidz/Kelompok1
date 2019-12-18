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
<title>SURAT SKCK</title>
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
	  <td align="center"><strong>JL. Watu Ulo No.01 Telp: 081 249 065 993 kode Pos 68172</strong></td>
  </tr>
</table>
<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">
<tr>
	<td colspan="2"><hr/></td>
	</tr>
	<tr>
      <td colspan="2"><div align="center"><strong><u>SURAT KETERANGAN CATATAN KEPOLISIAN</u></strong></div></td>
    </tr>
	<tr>
      <td colspan="2"><div align="center">Nomor : 200/_________/35.09.12.2002/2019. </div></td>
    </tr>					
	<tr>
      <td&nbsp;</td>
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
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>No Dan Tanggal KTP</td>
      <td>:&nbsp;<?php echo $NIKPENGAJU;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nama Lengkap</td>
      <td>:&nbsp;<?php echo $NAMAAJU;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Dilahirkan</td>
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
      <td>Pendidikan</td>
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
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut diatas benar-benar penduduk Desa Sabrang dan sampai saat ini masih tinggal di alamat tersebut di atas.</td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Yang bersangkutan selama menjadi Penduduk Desa Sabrang tidak pernah tersangkut dalam perkara tindak pidana atau tindak kejahatan lainya baik secara langsung ataupun tidak langsung. Adapun surat keterangan ini akan dipergunakan untuk melengkapi persyaratan: <?php echo $TUJUANJU ?>.</td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini dibuat dengan sebenarnya dan dapatnya dipergunakan sebagaimana mestinya.
		</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
</table>
<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">
    <tr align="center">
    <td></td>
      <td>Mengetahui</td>
      <td width="27%">&nbsp;</td>
      <td>Sabrang,<?php echo " $TGLSURATJU" ?></td>	
    </tr>
    <tr align="center">
      <td></td>
      <td>BABINKAMTIBMAS</td>	
      <td>&nbsp;</td>
      <td>KEPALA DESA SABRANG</td>	
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
      <td></td>
      <td><hr></td>
      <td>&nbsp;</td>
      <td><strong><u>ZUBAERI LUTFI</u></strong></td>
    </tr> 
</table>
<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">
<tr align="center">
      <td>Mengetahui</td>
</tr> 
<table width="80%" border="0" align="center" cellspacing="0" cellpadding="2">
<tr align="center">
<td></td>
      <td>CAMAT AMBULU</td>
      <td width="27%">&nbsp;</td>
      <td>KAPOLSEK AMBULU</td>	
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
      <td></td>
      <td><hr></td>
      <td>&nbsp;</td>
      <td><hr></td>
    </tr> 
</table>

</body>
</html>



