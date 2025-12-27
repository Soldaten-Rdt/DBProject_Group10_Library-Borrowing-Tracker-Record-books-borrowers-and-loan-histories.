<?php
include "connect_db.php";

$publisher_id = $_POST['publisher_id'];

$query = "DELETE FROM books_publisher WHERE publisher_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $publisher_id);
mysqli_stmt_execute($stmt);

header("Location: books_publisher.php");
exit;
