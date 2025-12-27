<?php
include "connect_db.php";

$book_id = $_POST['book_id'];

$query = "SELECT * FROM books WHERE book_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $book_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$book = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Buku</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #aaa595ff;
    padding: 30px;
}

h1 {
    text-align: center;
    color: #5d4037;
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
    background-color: #bcaaa4;
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
    background-color: #6d4c41;
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
<h1>Update Nomor Telepon User</h1>
<form action="update_buku_proses.php" method="POST">
    <input type="hidden" name="book_id" value="<?= $book['book_id'] ?>">

    <table class="alt">
        <tr>
        <th>book_id</th>
        <th>judul</th>
        <th>isbn</th>
        <th>tahun_publikasi</th>
        <th>deskripsi</th>
        <th>stock</th>
        <th>bisa_dipinjam</th>
        <th>kondisi</th>
        </tr>

        <tr>
            <td>
                AUTO_INCREMENT
            </td>
            <td>
              <input type="text" name="judul" value="<?= $book['judul'] ?>">  
            </td>
            <td>
                <input type="text" name="isbn" value="<?= $book['isbn'] ?>">
            </td>
            <td>
                <input type="date" name="tahun_publikasi" value="<?= $book['tahun_publikasi'] ?>">
            </td>
            <td>
                <textarea maxlength="1000" name="deskripsi" value="<?= $book['deskripsi'] ?>"> </textarea>
            </td>
            <td>
                <input type="number" name="stock" value="<?= $book['stock'] ?>">
            </td>
            <td>
            <select name="bisa_dipinjam" id="">
                <option value="ya" <?= $book['bisa_dipinjam'] == 'ya' ? 'selected' : '' ?>>ya</option>
                <option value="tidak" <?= $book['bisa_dipinjam'] == 'tidak' ? 'selected' : '' ?>>tidak</option>
            </select>
            </td>
            <td>
            <select name="kondisi" id="">
                <option value="Sempurna" <?= $book['kondisi'] == 'Sempurna' ? 'selected' : ''?>>Sempurna</option>
                <option value="Baik"<?= $book['kondisi'] == 'Baik' ? 'selected' : ''?>>Baik</option>
                <option value="Lumayan"<?= $book['kondisi'] == 'Lumayan' ? 'selected' : ''?>>Lumayan</option>
                <option value="Buruk"<?= $book['kondisi'] == 'Buruk' ? 'selected' : ''?>>Buruk</option>
                <option value="Rusak"<?= $book['kondisi'] == 'Rusak' ? 'selected' : ''?>>Rusak</option>
                <option value="Hilang"<?= $book['kondisi'] == 'Hilang' ? 'selected' : ''?>>Hilang</option>
            </select>
            </td>
        </tr>
    </table>
    <button type="submit">SIMPAN PERUBAHAN</button>
</form>
<body>
    
</body>
</html>