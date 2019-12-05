<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Your description goes here">
	<meta name="keywords" content="your,keywords,goes,here">
	<meta name="author" content="Your Name">
	<link rel="stylesheet" type="text/css" href="dikti.css" media="screen,projection">
	<link rel="stylesheet" type="text/css" href="style_menu.css" media="screen,projection">
	<script type="text/javascript" src="japascript/absen.js"></script>
	<link href="calendar/calendar.css" rel="stylesheet" type="text/css">
    <script language="javascript" src="calendar/calendar.js"></script>
	<title>Surat Keterangan</title>
	<style type="text/css">
	<!--	
	.layer1 {position:relative;z-index:1;}
	.layer2 {position:relative;z-index:2;}
	-->
	</style>
</head>

<body onload="showSuratKeterangan()">
<form id="kirim" name="kirim" method="post" enctype="multipart/form-data">
<div id="container">
	<div id="header">
		<h1>Politeknik Negeri Jember </h1>
<h2>Sistem Informasi Akademik Online </h2>
	</div>

	<div class="mainmenu">
		
		

<ul>    <li><a href="index.php">Home</a></li>
    <li><a href="#">Akademik</a>
        <ul>
            <li><a href="mDaftar_Ulang.php">Daftar Ulang</a></li>											
            <li><a href="mAbsen.php">Absen Kuliah</a></li>
            <li><a href="mJadwalKuliah.php">Jadwal Kuliah</a></li>
            <li><a href="mJadwalUjian.php">Jadwal Ujian</a></li>
            <li><a href="mNilaiSem.php">Nilai Per Semester</a></li>
            <li><a href="mKHS.php">Kartu Hasil Studi</a></li>            
            <li><a href="mEntry_TA.php">Pengajuan Judul TA</a></li>
            <li><a href="mDaftarSeminar_TA.php">Pengajuan Seminar TA</a></li>
            <!--<li><a href="daftar_hadir_seminar.php" target="_blank">Cetak Daftar Hadir Seminar</a></li>-->
            <li><a href="mDaftar_TA.php">Pengajuan Sidang TA</a></li>
            <li><a href="mEntry_Kerja_Praktek.php">Pendaftaran PKL</a></li>
            <li><a href="mDaftar_Kerja_Praktek.php">Pengajuan Ujian PKL</a></li>
		<li><a href="mEntry_Prayudisium.php">Pendaftaran Pra Yudisium</a></li>
			<li><a href="mEntry_Wisuda.php">Pendaftaran Wisuda</a></li>
            
        </ul>
    </li>
    <li><a href="#">Kuisioner</a>
        <ul>
            <!--<li><a href="mKepuasan.php">Kuisioner Kepuasan Layanan</a></li>-->
            <li><a href="mQuiz_Intro_Teori.php">Kuisioner Teori</a></li>
            <li><a href="mQuiz_Intro_Praktikum.php">Kuisioner Praktikum</a></li>                                            
        </ul>
    </li>
    <li><a href="#">Kemahasiswaan</a>
        <ul>
            <li><a href="mEntry_Beasiswa.php">Permohonan Beasiswa</a></li>																</ul>	
    </li>
    <li><a href="#">Lain-lain</a>
        <ul>
            <li><a href="mSurat_Keterangan.php">Surat Keterangan</a></li>	
            <!--<li><a href="mSurat_Keterangan2.php">Surat Keterangan Masih Kuliah</a></li>-->															</ul>
    </li>
    
    									
    <li class="userout">
            <a href="logout.php" title="logout"> Logout</a>
    </li>
        <li class="userout"><a href="mUbahPassword.php">Ubah Password</a>
    </li>
        <li class="userout">
            <a href="#">USER : Rachmad Hafidz Adhiwiyoto (E41182004)</a>
    </li>
									
</ul>


 </div>

	<div id="content">
						<table cellpadding="0" cellspacing="0" align="left" width="100%">
						<tbody><tr>
							<td><div id="tdData" align="center">
<table width="70%" border="0" align="center" cellspacing="0">
    <tbody><tr>
      <td colspan="2"><div align="center"><strong><u>SURAT KETERANGAN</u></strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Nomor : ______________/PL17.1/KM/2019 </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input type="button" name="Button" value="Versi Cetak" onclick="simpan_surat_keterangan('E41182004','2019','1')"></td>
    </tr>
</tbody></table>
<table width="70%" border="0" align="center" cellspacing="0">
    <tbody><tr>
      <td colspan="3">Yang bertanda tangan dibawah ini :</td>
    </tr>
    <tr>
      <td width="10%">&nbsp;</td>
      <td width="30%">N a m a</td>
      <td>: Drs. Juwanto
      <input type="hidden" name="pejabat" id="pejabat" value="8338">
      <input type="hidden" name="tahun" id="tahun" value="2019">
	  <input type="hidden" name="semester" id="semester" value="1"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>N I P</td>
      <td>: 19620725 199003 1 001</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pangkat / Gol / Ruang</td>
      <td>: Pembina Tk. I / IVb</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>J a b a t a n</td>
      <td>: Kabag. Perenc. Akademik &amp; Kemahasiswaan</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>P a d a</td>
      <td>: Politeknik Negeri Jember</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Menerangkan bahwa mahasiswa yang namanya dibawah ini :</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>N a m a</td>
      <td>:&nbsp;Rachmad Hafidz Adhiwiyoto</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>N I M / Semester</td>
      <td>:&nbsp;E41182004 / 3</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jurusan</td>
      <td>:&nbsp;Teknologi Informasi</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Program Studi</td>
      <td>:&nbsp;Teknik Informatika</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Adalah benar-benar Mahasiswa Politeknik Negeri Jember yang masih Aktif Kuliah pada Tahun Akademik 2019/2020 Semester Ganjil</td>
    </tr>
    <tr>
      <td colspan="3">Surat Keterangan ini dipergunakan untuk <input type="text" width="60" size="60" name="keperluan" id="keperluan"></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Jember, 27-11-2019</td>	
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Ka. Bag. Perencanaan</td>	
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Akademik &amp; Kemahasiswaan</td>	
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>	
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Drs. Juwanto</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>NIP. 19620725 199003 1 001</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><em>Catatan : 1. Mohon dicetak rangkap dua (2)</em></td>
    </tr>
    <tr>
      <td colspan="3"><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Mohon diparaf oleh Bagian Kemahasiswaan sebelum proses tanda tangan ke KaBag Perencanaan Akademik &amp; Kemahasiswaan</em></td>
    </tr>
</tbody></table>



</div></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						</tbody></table>		
	</div>
	

	<div id="footer">
		<p>© 2015</p>
	</div>

	</div>
</form>	



</body></html>