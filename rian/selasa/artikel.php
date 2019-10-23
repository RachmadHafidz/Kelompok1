<?php
// koneksi ke database
mysql_connect('localhost', 'root', '');
mysql_select_db('akademik');

// membaca id artikel
$idartikel = abs((int) $_GET['id']);

// membaca data detail artikel berdasarkan id artikel
$query = "SELECT * FROM artikel WHERE id = '$idartikel'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>

<html>
    <head>
       <title><?php echo $data['judul']?></title>
    </head>
    <body>
        <h1><?php echo $data['judul']?></h1>
        <small><em>Tanggal publikasi: <?php echo $data['tanggal']?></em></small>

        <div>
            <?php echo $data['konten']?>
        </div>

        <div>
           <h3>Artikel Terkait</h3>
           <?php
             include "function.php";
             artikelTerkait($idartikel);
           ?>
        </div>
    </body>
</html>

