<?php
include "connect_db.php";

$bahasa_id = $_POST['bahasa_id'];

$query = "DELETE FROM books_bahasa WHERE bahasa_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $bahasa_id);
mysqli_stmt_execute($stmt);

header("Location: books_bahasa.php");
exit;
