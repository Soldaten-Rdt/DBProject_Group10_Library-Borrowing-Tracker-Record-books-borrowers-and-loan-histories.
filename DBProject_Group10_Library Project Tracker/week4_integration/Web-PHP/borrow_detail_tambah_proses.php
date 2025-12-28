<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect_db.php";

$borrow_id = $_POST['borrow_id'];
$book_id = $_POST['book_id'];
$kuantitas = $_POST['kuantitas'];
$kondisi = $_POST['kondisi'];

$query = "INSERT INTO borrow_detail
(borrow_id, book_id, kuantitas, kondisi)
VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param(
    $stmt,
    "iiis",
    $borrow_id, $book_id, $kuantitas, $kondisi
);

mysqli_stmt_execute($stmt);
header("Location: borrow_detail.php");
exit;