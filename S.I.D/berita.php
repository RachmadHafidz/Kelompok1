<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
<title>Berita</title>
<?php include 'artikel/fungsi/config.php'; ?>
<link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="js/sticky.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-3">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">
                <h4 class="text-mono text-center">Kategori</h4>
              </div>
              <div class="card-body">
              
                <br />
                <blockquote class="card-blockquote">
                  <a href="artikel/detailwarga.php?id=<?= $row['id'] ?>">
                <?php
mysql_connect("localhost", "root", "");
mysql_select_db("db_desa3");
?>

	<?php
	$sql = mysql_query("SELECT * FROM kategori ORDER BY nama_kategory ASC");
	if(mysql_num_rows($sql) != 0){
		echo '<ul>';
		while($row = mysql_fetch_assoc($sql)){
      
      $kat_id = $row['id'];
   
			$sql2 = mysql_query("SELECT * FROM artikel WHERE id='$kat_id'");
 
			echo '<li>'.$row['nama_kategory'];
				echo '<ul>';
					while($row2 = mysql_fetch_assoc($sql2)){
            ?>
            <a href="artikel/detailwarga.php?id=<?= $row['id'] ?>">
            <?php
						echo '<li>'.$row2['judul'].'</li>';
					}
				echo '</ul>';
			echo '</li>';
		}
		echo '</ul>';
	}
	?>
 
          
                      </blockquote>
              </div>
            </div>
            </div>

<div class="col-md-8 mb-3">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="text-mono text-center">Berita</h4>
                    </div>
           
                    
                      <?php $data = tampilArtikel(); foreach($data as $row): ?>
                      
			                  <div class="well">
      <div class ="card-body">
      <a href="artikel/detailwarga.php?id=<?= $row['id'] ?>">
      <img style="float:left;"  class="img mr-3"	<?php echo "<img src='artikel/images/".$row['foto']."' width='70' height='70'>"?> 
      <h5 class="card-title"><?= $row['judul'] ?></h5></a>
      <small><p><?= $row['tanggal'] ?></p></small>
				</div>
       
				<?php
        
      $long_string = $row['isi'] ;
     
       $limited_string = limit_words($long_string, 5);
      echo $limited_string;

      ?>
      
     
     
     <a href="artikel/detailwarga.php?id=<?= $row['id'] ?>">Lanjut Baca </a>

				<div class ="card-footer">
				<div class="pull-right"><?= jumlahKomentar($row['id']) ?> Komentar</div>
        </div>
       

			</div>
      
			
		<?php endforeach ?>
   


                    </div>
                   
                  </div>
                </div>
              </div>
            
              </body>