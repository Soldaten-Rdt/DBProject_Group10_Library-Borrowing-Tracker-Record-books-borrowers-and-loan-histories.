<?php
include "connect_db.php";

$author_id = $_POST['author_id'];

$query = "DELETE FROM books_author WHERE author_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $author_id);
mysqli_stmt_execute($stmt);

header("Location: books_author.php");
exit;
