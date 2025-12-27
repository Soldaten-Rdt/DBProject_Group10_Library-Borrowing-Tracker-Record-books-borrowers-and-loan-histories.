<?php
include "connect_db.php";

$author_id = $_POST['author_id'];
$author = $_POST['author'] ?? 0;
$book_id = $_POST['book_id'];

$query = "UPDATE books_author SET author=?, book_id=? WHERE author_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sii", $author, $book_id, $author_id);
mysqli_stmt_execute($stmt);

header("Location: books_author.php");
exit;
