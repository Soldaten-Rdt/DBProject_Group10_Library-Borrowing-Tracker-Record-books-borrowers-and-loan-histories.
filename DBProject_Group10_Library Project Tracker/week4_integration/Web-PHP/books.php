<?php
include "connect_db.php";

$query = "select * from books";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
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
    justify-content: center;   /* tengah halaman */
    gap: 15px;                 /* jarak antar tombol */
    margin-top: 30px;
}

.action-bar form {
    margin: 0;
}

</style>

</head>
<body>
    <h1>Books</h1>
    <table class="alt"> 
        <tr>
            <th>
            book_id

            <th>
            judul

            <th>
            isbn
            </th>
            <th>
            tahun_publikasi
            </th>
            <th>
            deskripsi
            </th>
            <th>
            stock
            </th>
            <th>
            bisa_dipinjam
            </th>
            <th>
            kondisi
            </th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?> 
        <tr>
            <td>
                <?= $row['book_id'] ?>
            </td>
            <td>
                <?= $row['judul'] ?>
            </td>
            <td>
                <?= $row['isbn'] ?>
            </td>
            <td>
                <?= $row['tahun_publikasi'] ?>
            </td>
            <td>
                <?= $row['deskripsi'] ?>
            </td>
            <td>
                <?= $row['stock'] ?>
            </td>
            <td>
                <?= $row['bisa_dipinjam'] ?>
            </td>
            <td>
                <?= $row['kondisi'] ?>
            </td>
        </tr>

        <?php } ?>
    </table>
    <br>
    <div class="action-bar">
    <form action="books_author.php" method="post">
        <button type="submit">List Author Buku</button>
    </form>
    <br>
    <form action="books_bahasa.php" method="post">
        <button type="Submit">List Bahasa Buku</button>
    </form>
    <br>
    <form action="books_genre.php" method="post">
        <button type="Submit">List Genre Buku</button>
    </form>
    <br>
    <form action="books_publisher.php" method="post">
        <button type="submit">List Publisher Buku</button>
    </form>
    <br>
    <form action="books_tambah.php" method="post">
        <button type="submit">Tambah Buku</button>
    </form>
    <br>
    <form action="books_update.php" method="post">
        <button type="submit">Update Buku</button>
    </form>
    <br>
    <form action="books_delete.php" method="post">
        <button type="submit">Delete Buku</button>
    </form>
    </div>
</body>
</html>