<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$NO_DOMISILI = $_POST['NO_DOMISILI'];
$NIK_PENDUDUK = $_POST['NIK_PENDUDUK'];
$TGLSURATJU = $_POST['TGLSURATJU'];
$NAMAAJU = $_POST['NAMAAJU'];
$JKAJU = $_POST['JKAJU'];
$AGAMAAJU = $_POST['AGAMAAJU'];
$NIKPENGAJU = $_POST['NIKPENGAJU'];
$TMPLHRAJU = $_POST['TMPLHRAJU'];
$TGLHRAJU = $_POST['TGLHRAJU'];
$PEKERJAAN_AJU = $_POST['PEKERJAAN_AJU'];
$ALAMATAJU = $_POST['ALAMATAJU'];
$KETERANGANAJU = $_POST['KETERANGANAJU'];
$TUJUANJU = $_POST['TUJUANJU'];
$JENIS_SURATAJU = $_POST['JENIS_SURATAJU'];


	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO sk_domisili VALUES('".$NO_DOMISILI."','".$NIK_PENDUDUK."', '".$TGLSURATJU."','".$NAMAAJU."','".$JKAJU."','".$AGAMAAJU."','".$NIKPENGAJU."','".$TMPLHRAJU."','".$TGLHRAJU."','".$PEKERJAAN_AJU."','".$ALAMATAJU."','".$KETRANGANAJU."','".$TUJUANJU."','".$JENIS_SURATAJU."')";
	
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		$data=mysqli_query($koneksi, "SELECT * FROM sk_domisili where NO_DOMISILI='$NO_DOMISILI'");
		$hasil=mysqli_fetch_assoc($data);
		?>
		<input hidden method="post" name="nosur" value="<?php echo $hasil['NO_DOMISILI']?>"
		<?php
		header("location: reportdomisili.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
	

?>
