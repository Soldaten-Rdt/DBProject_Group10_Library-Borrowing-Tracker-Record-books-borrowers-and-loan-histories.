<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect_db.php";

$nomor_telepon = $_POST['nomor_telepon'] ?? 0;
$user_id = $_POST['user_id'];

$query = "INSERT INTO users_nomor_telepon
(nomor_telepon, user_id)
VALUES (?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param(
    $stmt,
    "si",
    $nomor_telepon, $user_id
);

mysqli_stmt_execute($stmt);
header("Location: users_nomor_telepon.php");
exit;