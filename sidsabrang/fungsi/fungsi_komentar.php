<?php

function jumlahKomentar($idArtikel)
{
	global $conn;

	$query = "SELECT * FROM komentar WHERE ID_ARTIKEL = '$idArtikel' ";
	$res   = mysqli_query($conn, $query);

	$row   = mysqli_num_rows($res);

	return $row;
}

function tampilKomentar($idArtikel)
{
	global $conn;

	$query = "SELECT * FROM komentar WHERE ID_ARTIKEL = '$idArtikel' ";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}

function postKomentar($data, $idArtikel)
{
	global $conn;

	$nama  = $data['nama'];
	$isi   = $data['isi'];
	$status ="Aktif";

	$query = "INSERT INTO komentar VALUES ('', '$idArtikel', '$nama', '$isi', NOW(), $status) ";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success'>Sukses</div>";
	}
}