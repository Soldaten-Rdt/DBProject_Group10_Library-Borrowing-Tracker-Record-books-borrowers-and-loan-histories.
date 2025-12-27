<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect_db.php";

$judul = $_POST['judul'];
$isbn = $_POST['isbn'];
$tahun_publikasi = $_POST['tahun_publikasi'];
$deskripsi = $_POST['deskripsi'];
$stock = $_POST['stock'];
$bisa_dipinjam = $_POST['bisa_dipinjam'];
$kondisi = $_POST['kondisi'];

$query = "INSERT INTO books
(judul, isbn, tahun_publikasi, deskripsi, stock, bisa_dipinjam, kondisi)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param(
    $stmt,
    "sississ",
    $judul, $isbn, $tahun_publikasi, $deskripsi, $stock, $bisa_dipinjam, $kondisi
);

mysqli_stmt_execute($stmt);
header("Location: books.php");
exit;