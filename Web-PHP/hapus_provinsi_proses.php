<?php
include "connect_db.php";

$id_provinsi = $_POST['id_provinsi'];

$query = "DELETE FROM provinsi WHERE id_provinsi = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id_provinsi);
mysqli_stmt_execute($stmt);

header("Location: provinsi.php");
exit;
