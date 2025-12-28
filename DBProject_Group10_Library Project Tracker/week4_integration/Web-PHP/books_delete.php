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
    <title>Hapus Buku</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #d05872ff;
    padding: 30px;
}

h1 {
    text-align: center;
    color: black;
}

table {
    width: 100%;
    border-collapse: collapse;
}

 table.alt tr:nth-child(even) {
                background-color: #eee;
            }
        table.alt tr:nth-child(odd) {
                background-color: #fff;
            }
th {
    background-color: #ff0000ff;
    padding: 10px;
}

td {
    padding: 10px;
}

input[type="text"],
input[type="number"] {
    width: 95%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #aaa;
}

button {
    margin-top: 15px;
    padding: 10px 20px;
    background-color: #c21a1aff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #4e342e;
}
</style>
</head>
<body>
    <h1>Hapus Buku</h1>
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
            <th></th>
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
            <td>
                <form action="books_delete_proses.php" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                    <input type="hidden" name="book_id" value="<?= $row['book_id'] ?>">
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>

        <?php } ?>
    </table>
</body>
</html>