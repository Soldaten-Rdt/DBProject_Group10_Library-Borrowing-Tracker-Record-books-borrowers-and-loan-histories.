<?php
include "connect_db.php";

$publisher_id = $_POST['publisher_id'];
$publisher = $_POST['publisher'] ?? 0;
$book_id = $_POST['book_id'];

$query = "UPDATE books_publisher SET publisher=?, book_id=? WHERE publisher_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sii", $publisher, $book_id, $publisher_id);
mysqli_stmt_execute($stmt);

header("Location: books_publisher.php");
exit;
