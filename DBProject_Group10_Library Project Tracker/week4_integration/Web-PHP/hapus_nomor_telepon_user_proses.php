<?php
include "connect_db.php";

$nomor_telepon_id = $_POST['nomor_telepon_id'];

$query = "DELETE FROM users_nomor_telepon WHERE nomor_telepon_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $nomor_telepon_id);
mysqli_stmt_execute($stmt);

header("Location: users_nomor_telepon.php");
exit;
