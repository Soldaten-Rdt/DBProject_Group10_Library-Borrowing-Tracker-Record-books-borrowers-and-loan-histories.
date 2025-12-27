<?php
include "connect_db.php";

$id_provinsi = $_POST['id_provinsi'];
$nama_provinsi = $_POST['nama_provinsi'] ?? '';
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];

$query = "UPDATE provinsi SET nama_provinsi=?, kota=?, kecamatan=? WHERE id_provinsi=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sssi", $nama_provinsi, $kota, $kecamatan, $id_provinsi);
mysqli_stmt_execute($stmt);

header("Location: provinsi.php");
exit;
