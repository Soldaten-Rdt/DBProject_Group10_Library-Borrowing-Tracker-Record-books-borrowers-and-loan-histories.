<?php
include "connect_db.php";

$query = "select * from borrow_detail";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copies</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #96907fff;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #3b3b3b;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
}

th {
    background-color: #6d4c41;
    color: white;
    padding: 12px;
}

td {
    padding: 10px;
    border: 1px solid #aaa;
    text-align: center;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #ffe0b2;
}

button {
    padding: 6px 14px;
    background-color: #8d6e63;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #5d4037;
}
.action-bar {
    display: flex;
    justify-content: center;  
    gap: 15px;                 
    margin-top: 30px;
}

.action-bar form {
    margin: 0;
}
</style>
</head>
<body>
    <h1>Borrow Detail</h1>
    <table class="alt"> 
        <tr>
            <th>
            borrow_detail_id
            </th>
            <th>
            borrow_id
            <th>
            book_id
            </th>
            <th>
            kuantitas
            </th>
            <th>
            kondisi
            </th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?> 
        <tr>
            <td>
                <?= $row['borrow_detail_id'] ?>
            </td>
            <td>
                <?= $row['borrow_id'] ?>
            </td>
            <td>
                <?= $row['book_id'] ?>
            </td>
            <td>
                <?= $row['kuantitas'] ?>
            </td>
            <td>
                <?= $row['kondisi'] ?>
            </td>
        </tr>

        <?php } ?>
    </table>
    <br>
    <div class="action-bar">
    <form action="borrow_detail_tambah.php" method="post">
        <button type="submit">Tambah detail peminjaman</button>
    </form>
    <form action="borrow_detail_update.php" method="post">
        <button type="submit">Update detail peminjaman</button>
    </form>
    <form action="borrow_detail_delete.php" method="post">
        <button type="submit">Delete detail peminjaman</button>
    </form>
</div>
</body>
</html>