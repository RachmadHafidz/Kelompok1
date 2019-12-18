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
<style>
        .dropbtn 
        {
        background:none;
        color: rgb(0, 0, 0);
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        }
    
      
        .dropdown 
        {
        position: relative;
        display: inline-block;
        z-index:9999;
        }

        .dropdown-content 
        {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a 
        {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content { display: block; }

        .dropdown:hover .dropbtn {background-color: #ffffff;}

        .right {text-align:right;}

        body {background: rgb(255, 255, 255);}

@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
/* Fixed navbar */

/* General sizing */
ul.dropdown-lr {
  width: 300px;
}

/* mobile fix */
@media (max-width: 768px) {
	.dropdown-lr h3 {
		color: #eee;
	}
	.dropdown-lr label {
		color: #eee;
  }
  .sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

}

    </style>   
<body>
<div class="container-float">
		
      
      <nav class="navbar sticky-top navbar-dark bg-dark justify-content-between"> <p><a><font class="navbar-brand" color="white">Sistem Informasi Desa Sabrang</font></a></p>
        <p><font color="white ">Jl. watu ulo no 1, Desa Sabrang, Kec. Ambulu, Kab. Jember , Kode Pos 68172</font></p>
        
        
      </nav>  
		
  </div>


  <nav class="navbar navbar-dark bg-dark justify-content-between"> 
      <div class="topnav" id="myTopnav">
        <div id="navbar">
        <div class="dropdown">
          <button class="dropbtn" > <a href="http://localhost/Kelompok1/S.I.D/index1.php">Beranda</a>
            <i class="fa fa-caret-down"></i>
          </button>
      </div>
      
      <div class="dropdown">
        <button class="dropbtn" > <a href="http://localhost/Kelompok1/S.I.D/profillogin.php">Profil Desa</a>
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="http://localhost/Kelompok1/S.I.D/profillogin.php">Profil Desa</a>
          <a href="http://localhost/Kelompok1/S.I.D/visimisilogin.php">Visi & Misi</a>
          <a href="http://localhost/Kelompok1/S.I.D/mottologin.php">Motto</a>
          <a href="http://localhost/Kelompok1/S.I.D/crud/index2.php">Perangkat Desa</a>
          
        </div>
      </div> 
  
      <div class="dropdown">
        <button class="dropbtn" > <a href="berita1.php">Berita</a>
          <i class="fa fa-caret-down"></i>
        </button>
    </div>
  
    <div class="dropdown">
      <button class="dropbtn" > <a href="http://localhost/Kelompok1/S.I.D/petunjuklogin.php">Petunjuk</a>
        <i class="fa fa-caret-down"></i>
      </button>
  </div>

 
  
    <div class="dropdown-content">
      <a href="http://localhost/Kelompok1/S.I.D/index.php">Perangkat Desa</a>
      <a href="http://localhost/Kelompok1/S.I.D/index1.php">Warga</a>
  </div> 
  </nav>
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
      <img style="float:left;"  class="img mr-3"	<?php echo "<img src='homeadmin/images/".$row['foto']."' width='70' height='70'>"?> 
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