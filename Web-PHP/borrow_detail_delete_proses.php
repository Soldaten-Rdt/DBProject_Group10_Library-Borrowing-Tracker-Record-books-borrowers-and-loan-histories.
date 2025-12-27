<?php
include "connect_db.php";

$borrow_detail_id = $_POST['borrow_detail_id'];

$query = "DELETE FROM borrow_detail WHERE borrow_detail_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $borrow_detail_id);
mysqli_stmt_execute($stmt);

header("Location: borrow_detail.php");
exit;
