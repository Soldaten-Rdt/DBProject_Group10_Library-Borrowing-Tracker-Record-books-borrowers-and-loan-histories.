<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect_db.php";

$genre = $_POST['genre'] ?? 0;
$book_id = $_POST['book_id'];

$query = "INSERT INTO books_genre
(genre, book_id)
VALUES (?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param(
    $stmt,
    "si",
    $genre, $book_id
);

mysqli_stmt_execute($stmt);
header("Location: books_genre.php");
exit;