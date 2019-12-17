<?php include 'fungsi/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artikel Komen Mysqli</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<h3 class="text-center">Input Artikel</h3>
		<hr>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" class="form-control">
			</div>
			<div class="form-group">
				<label>Tanggal</label>
				<input type="date" name="tanggal" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" name="nama_kategory" class="form-control">
			</div>
			<div class="kotak">
				<label>Isi</label>
				<textarea name="isi" id="ckedtor" class="ckeditor" rows="10"></textarea>
			</div>
			<button class="btn btn-primary" type="submit" name="btnsimpan">
				Simpan
			</button>
		</form>
		<hr>
		<?php if (isset($_POST['btnsimpan'])) {
			postArtikel($_POST);
			postArtikel1($_POST);
			
			
			
			echo "<meta http-equiv='refresh' content='1;url=index.php'>";
		} ?>
	
		<hr>
		<a href="index.php">
			<button class="btn btn-default">Kembali</button>
		</a>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>