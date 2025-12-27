<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect_db.php";

$issue_date = $_POST['issue_date'];
$due_date = $_POST['due_date'];
$book_id = $_POST['book_id'];
$user_id = $_POST['user_id'];
$kondisi_before = $_POST['kondisi_before'];

$query = "INSERT INTO borrow
(issue_date, due_date, book_id, user_id, kondisi_before)
VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param(
    $stmt,
    "ssiis",
    $issue_date, $due_date, $book_id, $user_id, $kondisi_before
);

mysqli_stmt_execute($stmt);
header("Location: borrow.php");
exit;