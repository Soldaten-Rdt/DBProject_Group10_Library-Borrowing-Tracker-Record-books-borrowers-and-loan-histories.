<?php
include "connect_db.php";

$borrow_detail_id = $_POST['borrow_detail_id'];

$query = "SELECT * FROM borrow_detail WHERE borrow_detail_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $borrow_detail_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$borrow_detail = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Detail Peminjaman</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #95948fff;
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
<h1>Update Detail Peminjaman</h1>
<form action="borrow_detail_update_proses.php" method="POST">
    <input type="hidden" name="borrow_detail_id" value="<?= $borrow_detail['borrow_detail_id'] ?>">

    <table class="alt">
        <tr>
        <th>borrow_detail_id</th>
        <th>borrow_id</th>
        <th>book_id</th>
        <th>kuantitas</th>
        <th>kondisi</th>
        </tr>

        <tr>
            <td>
                AUTO_INCREMENT
            </td>
            <td>
              <input type="number" name="borrow_id" value="<?= $borrow_detail['borrow_id'] ?>">  
            </td>
            <td>
                <input type="number" name="book_id" value="<?= $borrow_detail['book_id'] ?>">
            </td>
            <td>
                <input type="number" name="kuantitas" value="<?= $borrow_detail['kuantitas'] ?>">
            </td>
            <td>
                <select name="kondisi" id="">
                <option value="Sempurna" <?= $borrow_detail['kondisi'] == 'Sempurna' ? 'selected' : ''?>>Sempurna</option>
                <option value="Baik"<?= $borrow_detail['kondisi'] == 'Baik' ? 'selected' : ''?>>Baik</option>
                <option value="Lumayan"<?= $borrow_detail['kondisi'] == 'Lumayan' ? 'selected' : ''?>>Lumayan</option>
                <option value="Buruk"<?= $borrow_detail['kondisi'] == 'Buruk' ? 'selected' : ''?>>Buruk</option>
                <option value="Rusak"<?= $borrow_detail['kondisi'] == 'Rusak' ? 'selected' : ''?>>Rusak</option>
                <option value="Hilang"<?= $borrow_detail['kondisi'] == 'Hilang' ? 'selected' : ''?>>Hilang</option>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit">SIMPAN PERUBAHAN</button>
</form>
<body>
    
</body>
</html>