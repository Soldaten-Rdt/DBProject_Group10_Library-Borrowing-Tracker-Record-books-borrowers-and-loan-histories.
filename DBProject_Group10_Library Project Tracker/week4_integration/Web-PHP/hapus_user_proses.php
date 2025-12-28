<?php
include "connect_db.php";

$user_id = $_POST['user_id'];

$query = "DELETE FROM users WHERE user_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

header("Location: users.php");
exit;
