<?php
include "connect_db.php";

$borrow_id = $_POST['borrow_id'];
$issue_date = $_POST['issue_date'];
$due_date = $_POST['due_date'];
$kondisi_after = $_POST['kondisi_after'];
$book_id = $_POST['book_id'];
$user_id = $_POST['user_id'];
$kondisi_before = $_POST['kondisi_before'];


$query = "UPDATE borrow SET issue_date=?, due_date=?, kondisi_after=?, book_id=?, user_id=?, kondisi_before=? WHERE borrow_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sssiisi", $issue_date, $due_date,$kondisi_after,$book_id,$user_id,$kondisi_before, $borrow_id);
mysqli_stmt_execute($stmt);

header("Location: borrow.php");
exit;
