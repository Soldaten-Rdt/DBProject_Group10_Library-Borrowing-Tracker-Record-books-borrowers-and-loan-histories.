<?php
include "connect_db.php";

$bahasa_id = $_POST['bahasa_id'];
$bahasa = $_POST['bahasa'] ?? 0;
$book_id = $_POST['book_id'];

$query = "UPDATE books_bahasa SET bahasa=?, book_id=? WHERE bahasa_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sii", $bahasa, $book_id, $bahasa_id);
mysqli_stmt_execute($stmt);

header("Location: books_bahasa.php");
exit;
