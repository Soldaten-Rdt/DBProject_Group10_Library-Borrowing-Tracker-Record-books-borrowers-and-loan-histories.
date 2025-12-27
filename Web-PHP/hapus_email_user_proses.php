<?php
include "connect_db.php";

$email_id = $_POST['email_id'];

$query = "DELETE FROM users_email WHERE email_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $email_id);
mysqli_stmt_execute($stmt);

header("Location: users_email.php");
exit;
