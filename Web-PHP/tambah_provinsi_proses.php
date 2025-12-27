<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect_db.php";
$id_provinsi = $_POST['id_provinsi'];
$nama_provinsi = $_POST['nama_provinsi'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];

$query = "INSERT INTO provinsi
(id_provinsi, nama_provinsi, kota, kecamatan)
VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param(
    $stmt,
    "isss",
    $id_provinsi,$nama_provinsi, $kota, $kecamatan
);

mysqli_stmt_execute($stmt);
header("Location: provinsi.php");
exit;