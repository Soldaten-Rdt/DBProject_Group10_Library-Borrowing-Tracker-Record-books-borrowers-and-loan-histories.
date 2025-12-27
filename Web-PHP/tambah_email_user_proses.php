<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect_db.php";

$email = $_POST['email'] ?? 0;
$user_id = $_POST['user_id'];

$query = "INSERT INTO users_email
(email, user_id)
VALUES (?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param(
    $stmt,
    "si",
    $email, $user_id
);

mysqli_stmt_execute($stmt);
header("Location: users_email.php");
exit;