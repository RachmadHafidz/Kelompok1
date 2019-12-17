<!DOCTYPE html>
<html>
<head>
<style>
#comment {
margin:20px 0 0 20px;
border: 2px solid #848484;
border-radius:20px;
-moz-border-radius:20px;
max-height: 90%;
font-weight: bold;
color: #606060;
padding: 10px;
width: 440px;
background-color: #dcdcdc;
}
#publishcomment {
border: 2px solid #848484;
box-shadow: 12px 12px 7px #888888;
margin: 30px 0 50px 20px;
padding: 10px;
max-height: 100%;
color: #3d3d3d;
width: 550px;
font-size: 12px;
line-height: 15px;
}
#publishcomment hr {
color: #ccc;
}
#publishcomment a {
color: #da5700;
text-decoration: none;
font-weight:normal;
}
#publishcomment a:link {
font-weight: bold;
}
#publishcomment a:hover {
text-decoration: underline;
}
</style>
</head>
<body>
<div id="comment">
<form name="submitcomment" method="post" action="submitcomment.php">Nama:<br>
<input name="nama" type="text"><br>
Email(optional):<br><input name="email" type="text"><br>
Website(optional):<br><input name="website" type="text"><br>
Komentar:<br><textarea name="komentar" rows="6" cols="50"></textarea><br>
<input name="art_id" value="1" type="hidden">
<input name="art_url" value="contoh.php" type="hidden"><br>
<input name="tombol" value="Kirim" type="submit"></form></div>
<div id="publishcomment">
<?php include("publishcomment.php"); getcomment("1"); ?></div>
</body>

</html>