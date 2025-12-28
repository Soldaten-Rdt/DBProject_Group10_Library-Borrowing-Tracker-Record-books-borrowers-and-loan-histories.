<?php
include "connect_db.php";

$book_id = $_POST['book_id'];
$judul = $_POST['judul'];
$isbn = $_POST['isbn'];
$tahun_publikasi = $_POST['tahun_publikasi'];
$deskripsi = $_POST['deskripsi'] ?? '';
$stock = $_POST['stock'] ?? 0;
$bisa_dipinjam = $_POST['bisa_dipinjam'];
$kondisi = $_POST['kondisi'];


$query = "UPDATE books SET judul=?, isbn=?, tahun_publikasi=?, deskripsi=?, stock=?, bisa_dipinjam=?, kondisi=? WHERE book_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssssissi", $judul, $isbn, $tahun_publikasi, $deskripsi, $stock, $bisa_dipinjam, $kondisi, $book_id);
mysqli_stmt_execute($stmt);

header("Location: books.php");
exit;
