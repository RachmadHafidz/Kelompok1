<?php
include 'koneksi.php';
$NIKAJU = $_GET['NIKAJU'];
$query = mysqli_query($koneksi, "select * from penduduk INNER JOIN keluarga ON penduduk.NO_KK=keluarga.NO_KK WHERE NIK_PENDUDUK='$NIKAJU'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'NAMAAJU'      =>  $mahasiswa['NAMAPEN'],
            'JKAJU'   =>  $mahasiswa['JK_PEN'],
			'STATUSAJU'    =>  $mahasiswa['STATUSPEN'],
			'TMPLHRAJU'      =>  $mahasiswa['TEMPATLHR'],
            'TGLHRAJU'   =>  $mahasiswa['TANGGALHR'],
			'AGAMAAJU'    =>  $mahasiswa['AGAMAPEN'],
			'KWNAJU'      =>  $mahasiswa['KWNPEN'],
			'ALAMATAJU'      =>  $mahasiswa['ALAMAT'],
			'PENDIDIKANAJU'      =>  $mahasiswa['PENDIDIKANPEN'],
            'PEKERJAANAJU'   =>  $mahasiswa['PEKERJAANPEN'],);
 echo json_encode($data);
?>
