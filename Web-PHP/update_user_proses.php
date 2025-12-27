<?php
include "connect_db.php";

$id = $_POST['user_id'];
$denda = $_POST['denda'] ?? 0;
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nama_panjang = $_POST['nama_panjang'];
$nama_panggilan = $_POST['nama_panggilan'];
$id_provinsi = $_POST['id_provinsi'];

$query = "UPDATE users SET denda=?, rt=?, rw=?, jenis_kelamin=?, nama_panjang=?, nama_panggilan=?, id_provinsi=? WHERE user_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "iiisssii", $denda, $rt, $rw, $jenis_kelamin, $nama_panjang , $nama_panggilan, $id_provinsi, $id);
mysqli_stmt_execute($stmt);

header("Location: users.php");
exit;
