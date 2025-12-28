<?php
include "connect_db.php";

$bahasa_id = $_POST['bahasa_id'];

$query = "SELECT * FROM books_bahasa WHERE bahasa_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $bahasa_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$lang = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Bahasa Bukur</title>
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
<h1>Update Bahasa Buku</h1>
<form action="update_bahasa_buku_proses.php" method="POST">
    <input type="hidden" name="bahasa_id" value="<?= $lang['bahasa_id'] ?>">

    <table class="alt">
        <tr>
        <th>bahasa_id</th>
        <th>bahasa</th>
        <th>book_id</th>
        </tr>

        <tr>
            <td>
                AUTO_INCREMENT
            </td>
            <td>
              <input type="text" name="bahasa" value="<?= $lang['bahasa'] ?>">  
            </td>
            <td>
                <input type="number" name="book_id" value="<?= $lang['book_id'] ?>">
            </td>
        </tr>
    </table>
    <button type="submit">SIMPAN PERUBAHAN</button>
</form>
<body>
    
</body>
</html>