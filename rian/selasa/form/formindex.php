<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form class="form-horizontal" role="form">
                <h2>Pelayanan</h2>
                <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="NIK" class="col-sm-3 control-label">NIk</label>
                    <div class="col-sm-9">
                        <input type="text" id="NIK" placeholder="NIK" class="form-control" autofocus>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="NAMA" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" id="NAMA" placeholder="Nama" class="form-control" autofocus>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="Alamat" class="col-sm-3 control-label">Alamat </label>
                    <div class="col-sm-9">
                        <input type="Alamat" id="Alamat" placeholder="Alamat" class="form-control" name= "Alamat">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Tempat_lahir" class="col-sm-3 control-label">Tempat Lahir </label>
                    <div class="col-sm-9">
                        <input type="Tempat_lahir" id="Tempat_lahir" placeholder="Tempat Lahir" class="form-control" name= "Tempat_lahir">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Tanggal Surat</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>

                
               
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->