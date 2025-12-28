<?php
include "connect_db.php";

$book_id = $_POST['book_id'];

$query = "DELETE FROM books WHERE book_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $book_id);
mysqli_stmt_execute($stmt);

header("Location: books.php");
exit;
