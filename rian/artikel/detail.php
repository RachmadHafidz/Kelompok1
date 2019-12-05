<?php
include 'fungsi/config.php';
$rowArtikel  = detailArtikel($_GET['id']);
$rowKomentar = tampilKomentar($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<title>Artikel Komen Mysqli</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-8 mb-3">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="text-mono text-center"><?= $rowArtikel['judul'] ?></h4>
                    </div>
                    <div class="card-body">
                    	<?php echo "<td><img src='images/".$rowArtikel['foto']."' width='150' height='150'></td>"?>  
					       
                      <p>	<?= $rowArtikel['isi'] ?>
                      </p>
	</div>
	</div>

	</br>
	</br>
	</br>
	</br>	
		<form method="post">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Isi Komentar</label>
				<textarea name="isi" class="form-control" rows="5"></textarea>
			</div>
			<button class="btn btn-primary" type="submit" name="btnkomen">
				Masukkan Komentar
			</button>
		</form>
		<hr>
		<?php
			if (isset($_POST['btnkomen'])) {
				postKomentar($_POST, $_GET['id']);

				echo "<meta http-equiv='refresh' content='1.5;url=detail.php?id=".$rowArtikel['id']."'>";
			}
		?>
		<!-- <div class="alert alert-success">asdasd</div> -->
		<?php foreach ($rowKomentar as $row): ?>
			
			<div class="well">
				<b><?= $row['nama'] ?></b> <br>
				<p><?= $row['isi'] ?></p>
			</div>
		<?php endforeach ?>
		<hr>
		<a href="index.php">
			<button class="btn btn-default">
				Kembali
			</button>
		</a>
		<hr>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>