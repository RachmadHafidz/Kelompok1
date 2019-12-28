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
		<h3 class="text-center">Daftar Artikel</h3>
		
		<hr>
		<?php $data = tampilArtikel(); foreach($data as $row): ?>
			<div class="well">

			<?php echo "<td><img src='images/".$row['foto']."' width='70' height='70'></td>"?> 
				<a href="detail.php?id=<?= $row['id'] ?>">
					<?= $row['judul'] ?>
				</a>
				
				
				<div class="pull-right"><?= jumlahKomentar($row['id']) ?> Komentar</div>
			</div>
			
		<?php endforeach ?>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>