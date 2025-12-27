<?php
include "connect_db.php";

$borrow_id = $_POST['borrow_id'];

$query = "DELETE FROM borrow WHERE borrow_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $borrow_id);
mysqli_stmt_execute($stmt);

header("Location: borrow.php");
exit;
