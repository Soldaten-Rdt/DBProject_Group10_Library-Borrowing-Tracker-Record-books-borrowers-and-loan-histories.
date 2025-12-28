<?php
include "connect_db.php";

$email_id = $_POST['email_id'];
$email = $_POST['email'] ?? 0;
$user_id = $_POST['user_id'];

$query = "UPDATE users_email SET email=?, user_id=? WHERE email_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sii", $email, $user_id, $email_id);
mysqli_stmt_execute($stmt);

header("Location: users_email.php");
exit;
