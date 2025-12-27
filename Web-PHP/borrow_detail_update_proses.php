<?php
include "connect_db.php";

$borrow_detail_id = $_POST['borrow_detail_id'];
$borrow_id = $_POST['borrow_id'];
$book_id = $_POST['book_id'];
$kuantitas = $_POST['kuantitas'];
$kondisi = $_POST['kondisi'];


$query = "UPDATE borrow_detail SET borrow_id=?, book_id=?, kuantitas=?, kondisi=? WHERE borrow_detail_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "iiisi", $borrow_id, $book_id,$kuantitas,$kondisi,$borrow_detail_id);
mysqli_stmt_execute($stmt);

header("Location: borrow_detail.php");
exit;
