<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect_db.php";

$denda = $_POST['denda'] ?? 0;
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$jk = $_POST['jenis_kelamin'];
$nama_panjang = $_POST['nama_panjang'];
$nama_panggilan = $_POST['nama_panggilan'];
$id_provinsi = $_POST['id_provinsi'];

$query = "INSERT INTO users
(denda, rt, rw, jenis_kelamin, nama_panjang, nama_panggilan, id_provinsi)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param(
    $stmt,
    "iiisssi",
    $denda, $rt, $rw, $jk, $nama_panjang, $nama_panggilan, $id_provinsi
);

mysqli_stmt_execute($stmt);
header("Location: users.php");
exit;