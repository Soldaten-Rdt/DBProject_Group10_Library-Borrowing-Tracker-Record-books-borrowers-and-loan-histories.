<?php
include "connect_db.php";

$genre_id = $_POST['genre_id'];

$query = "DELETE FROM books_genre WHERE genre_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $genre_id);
mysqli_stmt_execute($stmt);

header("Location: books_genre.php");
exit;
