<?php
include "connect_db.php";

$borrow_id = $_POST['borrow_id'];

$query = "SELECT * FROM borrow WHERE borrow_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $borrow_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$borrow = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Peminjaman</title>
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
<h1>Update Peminjaman</h1>
<form action="update_borrow_proses.php" method="POST">
    <input type="hidden" name="borrow_id" value="<?= $borrow['borrow_id'] ?>">

    <table class="alt">
        <tr>
        <th>borrow_id</th>
        <th>issue_date</th>
        <th>due_date</th>
        <th>kondisi_after</th>
        <th>book_id</th>
        <th>user_id</th>
        <th>kondisi_before</th>
        </tr>

        <tr>
            <td>
                AUTO_INCREMENT
            </td>
            <td>
              <input type="date" name="issue_date" value="<?= $borrow['issue_date'] ?>">  
            </td>
            <td>
                <input type="date" name="due_date" value="<?= $borrow['due_date'] ?>">
            </td>
            <td>
                <select name="kondisi_after" id="">
                <option value="Sempurna" <?= $borrow['kondisi_after'] == 'Sempurna' ? 'selected' : ''?>>Sempurna</option>
                <option value="Baik"<?= $borrow['kondisi_after'] == 'Baik' ? 'selected' : ''?>>Baik</option>
                <option value="Lumayan"<?= $borrow['kondisi_after'] == 'Lumayan' ? 'selected' : ''?>>Lumayan</option>
                <option value="Buruk"<?= $borrow['kondisi_after'] == 'Buruk' ? 'selected' : ''?>>Buruk</option>
                <option value="Rusak"<?= $borrow['kondisi_after'] == 'Rusak' ? 'selected' : ''?>>Rusak</option>
                <option value="Hilang"<?= $borrow['kondisi_after'] == 'Hilang' ? 'selected' : ''?>>Hilang</option>
                </select>
            </td>
            <td>
                <input type="number" name="book_id" value="<?= $borrow['book_id'] ?>">
            </td>
            <td>
                 <input type="number" name="user_id" value="<?= $borrow['user_id'] ?>">
            </td>
            <td>
                 <select name="kondisi_before" id="">
                <option value="Sempurna" <?= $borrow['kondisi_before'] == 'Sempurna' ? 'selected' : ''?>>Sempurna</option>
                <option value="Baik"<?= $borrow['kondisi_before'] == 'Baik' ? 'selected' : ''?>>Baik</option>
                <option value="Lumayan"<?= $borrow['kondisi_before'] == 'Lumayan' ? 'selected' : ''?>>Lumayan</option>
                <option value="Buruk"<?= $borrow['kondisi_before'] == 'Buruk' ? 'selected' : ''?>>Buruk</option>
                <option value="Rusak"<?= $borrow['kondisi_before'] == 'Rusak' ? 'selected' : ''?>>Rusak</option>
                <option value="Hilang"<?= $borrow['kondisi_before'] == 'Hilang' ? 'selected' : ''?>>Hilang</option>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit">SIMPAN PERUBAHAN</button>
</form>
<body>
    
</body>
</html>