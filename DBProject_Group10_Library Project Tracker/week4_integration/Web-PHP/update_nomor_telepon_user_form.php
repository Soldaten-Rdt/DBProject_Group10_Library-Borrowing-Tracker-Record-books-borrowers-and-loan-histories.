<?php
include "connect_db.php";

$nomor_telepon_id = $_POST['nomor_telepon_id'];

$query = "SELECT * FROM users_nomor_telepon WHERE nomor_telepon_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $nomor_telepon_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Nomor Telepon User</title>
   <style>
body {
    font-family: Arial, sans-serif;
    background-color: #a8a69eff;
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
<form action="update_nomor_telepon_user_proses.php" method="POST">
    <input type="hidden" name="nomor_telepon_id" value="<?= $user['nomor_telepon_id'] ?>">

    <table class="alt">
        <tr>
        <th>nomor_telepon_id</th>
        <th>nomor_telepon</th>
        <th>user_id</th>
        </tr>

        <tr>
            <td>
                AUTO_INCREMENT
            </td>
            <td>
              <input type="text" name="nomor_telepon" value="<?= $user['nomor_telepon'] ?>">  
            </td>
            <td>
                <input type="number" name="user_id" value="<?= $user['user_id'] ?>">
            </td>
        </tr>
    </table>
    <button type="submit">SIMPAN PERUBAHAN</button>
</form>
<body>
    
</body>
</html>