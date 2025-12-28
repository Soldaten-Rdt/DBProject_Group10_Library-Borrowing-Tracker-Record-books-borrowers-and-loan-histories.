<?php
include "connect_db.php";

$genre_id = $_POST['genre_id'];
$genre = $_POST['genre'] ?? 0;
$book_id = $_POST['book_id'];

$query = "UPDATE books_genre SET genre=?, book_id=? WHERE genre_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sii", $genre, $book_id, $genre_id);
mysqli_stmt_execute($stmt);

header("Location: books_genre.php");
exit;
