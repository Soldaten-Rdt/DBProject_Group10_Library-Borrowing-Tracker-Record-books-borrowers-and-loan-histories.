<?php
include "connect_db.php";

$email_id = $_POST['email_id'];

$query = "SELECT * FROM users_email WHERE email_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $email_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Email User</title>
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
<h1>Update Email User</h1>
<form action="update_email_user_proses.php" method="POST">
    <input type="hidden" name="email_id" value="<?= $user['email_id'] ?>">

    <table class="alt">
        <tr>
        <th>email_id</th>
        <th>email</th>
        <th>user_id</th>
        </tr>

        <tr>
            <td>
                AUTO_INCREMENT
            </td>
            <td>
              <input type="text" name="email" value="<?= $user['email'] ?>">  
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