<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect_db.php";

$author = $_POST['author'] ?? 0;
$book_id = $_POST['book_id'];

$query = "INSERT INTO books_author
(author, book_id)
VALUES (?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param(
    $stmt,
    "si",
    $author, $book_id
);

mysqli_stmt_execute($stmt);
header("Location: books_author.php");
exit;