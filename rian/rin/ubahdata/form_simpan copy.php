<html>
<head>
	<title>Simpan Data</title>
</head>
<body>
	<h1>Tambah Data </h1>
	<div class="card mb-3" id="utama">
          <div class="card-header">
            <i class="fas fa-edit"></i>
            Pendaftaran Admin</div>
          <div class="card-body">
        <form method="" action="" enctype="multipart/form-data">
            <table cellpadding="8">
	<tr>
		<td><input type="hidden" name="id"></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td><input type="text" name="NIK"></td>
	
	
		<td>No KK</td>
		<td><input type="text" name="NO_KK"></td>
    
    
		<td>Nama</td>
		<td><input type="text" name="NAMA"></td>
    </tr> 
    <tr>
		<td>Jenis Kelamin</td>
		<td>
		<?php
		if(['JENIS_KELAMIN'] == "Laki-laki"){
			echo "<input type='radio' name='JENIS_KELAMIN' value='laki-laki' checked='checked'> Laki-laki";
			echo "<input type='radio' name='JENIS_KELAMIN' value='perempuan'> Perempuan";
		}else{
			echo "<input type='radio' name='JENIS_KELAMIN' value='laki-laki'> Laki-laki";
			echo "<input type='radio' name='JENIS_KELAMIN' value='perempuan' checked='checked'> Perempuan";
		}
		?>
		</td>

    
		<td>Tempat Lahir</td>
		<td><input type="type" name="TMP_LHR"></td>
	
    
		<td>Tanggal Lahir</td>
		<td><input type="date" name="TGL_LHR"></td>
	</tr>
    <tr>
		<td>Agama</td>
		<td><input type="text" name="AGAMA"></td>
	
    
		<td>Pendidikan</td>
		<td><input type="text" name="PENDIDIKAN"></td>
	
    
		<td>Pekerjaan</td>
		<td><input type="text" name="PEKERJAAN"></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td><input type="text" name="ALAMAT"></td>
	
    
		<td>RT/RW</td>
		<td><input type="text" name="RWRT"></td>
	
    
		<td>Desa</td>
		<td><input type="text" name="DESA"></td>
	</tr>
    <tr>
		<td>Kecamatan</td>
		<td><input type="text" name="KECAMATAN"></td>
	
    
		<td>Kabupaten</td>
		<td><input type="text" name="KAB_KOTA"></td>
	
		<td>Kode Pos</td>
		<td><input type="text" name="KODE_POS"></td>
	</tr>
    <tr>
		<td>Provinsi</td>
		<td><input type="text" name="PROVINSI"></td>
	
		<td>Kewarganegaraan</td>
		<td><input type="text" name="KEWARGANEGARAAN"></td>
	
		<td>Username</td>
		<td><input type="text" name="USERNAME"></td>
	</tr>
    <tr>
		<td>Password</td>
		<td><input type="text" name="PASSWORD"></td>
	
		<td>Tanggal Daftar</td>
		<td><input type="date" name="TGL_DAFTAR"></td>
	
		<td>Level</td>
		<td>
		<?php
		if(['LEVEL'] == "Level"){
			echo "<input type='radio' name='LEVEL' value='admin' checked='checked'> Admin";
			echo "<input type='radio' name='LEVEL' value='admin'> Warga";
		}else{
			echo "<input type='radio' name='LEVEL' value='admin'> Admin";
			echo "<input type='radio' name='LEVEL' value='admin' checked='checked'> Warga";
		}
		?>
		</td>
	</tr> 
	<tr>
		<td>Foto</td>
		<td><input type="file" name="FOTO"></td>
	
		<td>Status</td>
		<td>
		<?php
		if(['STATUS'] == "Aktif"){
			echo "<input type='radio' name='STATUS' value='aktif' checked='checked'> Aktif";
			echo "<input type='radio' name='STATUS' value='aktif'> Nonaktif";
		}else{
			echo "<input type='radio' name='STATUS' value='aktif'> Aktif";
			echo "<input type='radio' name='STATUS' value='aktif' checked='checked'> Nonaktif";
		}
		?>
		</td>
	</tr> 
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="http://localhost/Kelompok1/rian/rin/home/dtwarga.php"><input type="button" value="Batal"></a>
	</form>
	</div>
	</div>
</body>
</html>
