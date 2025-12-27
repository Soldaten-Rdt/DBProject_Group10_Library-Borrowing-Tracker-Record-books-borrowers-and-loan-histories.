<?php
include "connect_db.php";

$nomor_telepon_id = $_POST['nomor_telepon_id'];
$nomor_telepon = $_POST['nomor_telepon'] ?? 0;
$user_id = $_POST['user_id'];

$query = "UPDATE users_nomor_telepon SET nomor_telepon=?, user_id=? WHERE nomor_telepon_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sii", $nomor_telepon, $user_id, $nomor_telepon_id);
mysqli_stmt_execute($stmt);

header("Location: users_nomor_telepon.php");
exit;
