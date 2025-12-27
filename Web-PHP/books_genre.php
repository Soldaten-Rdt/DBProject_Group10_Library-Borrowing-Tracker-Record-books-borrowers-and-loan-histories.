<?php
include "connect_db.php";

$query = "select * from books_genre";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Genre</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f1e8;
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
    <h1>Books Genre</h1>
    <table class="alt"> 
        <tr>
            <th>
            genre_id
            </th>
            <th>
            genre
            </th>
            <th>
            book_id
            </th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?> 
        <tr>
            <td>
            <?= $row['genre_id'] ?>
            </td>
            <td>
                <?= $row['genre'] ?>
            </td>
            <td>
                <?= $row['book_id'] ?>
            </td>
        </tr>

        <?php } ?>
    </table>
<br>
<div class="action-bar">
<form action="tambah_genre_buku.php" method="POST">
    <button type="submit">Tambahkan Genre Buku</button>
</form>
<br>
<form action="update_genre_buku.php" method="POST">
    <button type="submit">Update Genre Buku</button>
</form>
<br>
<form action="hapus_genre_buku.php" method="POST">
    <button type="submit"> Hapus Genre Buku</button>
</form>
</div>
</body>
</html>