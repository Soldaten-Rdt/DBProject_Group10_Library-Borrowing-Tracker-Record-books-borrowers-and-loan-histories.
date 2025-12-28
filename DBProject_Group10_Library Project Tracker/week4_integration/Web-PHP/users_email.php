<?php
include "connect_db.php";
$query = "select * from users_email";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email User</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #b5ad98ff;
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
    background-color: #8b6152ff;
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
<h1>Email User</h1>
<table class="alt">
<tr>
    <th>
        email_id
    </th>
    <th>    
        email
    </th>

    <th>
        user_id
    </th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?> 
<tr>
    <td>
        <?=  $row["email_id"] ?>
    </td>
    <td>
        <?=  $row["email"] ?>
    </td>
     <td>
        <?=  $row["user_id"] ?>
    </td>
</tr>
<?php } ?>

</table>
<br>
<div class="action-bar">
<form action="tambah_email_user.php" method="POST">
    <button type="submit">Tambahkan Email User</button>
</form>
<br>
<form action="update_email_user.php" method="POST">
    <button type="submit">Update Email User</button>
</form>
<br>
<form action="hapus_email_user.php" method="POST">
    <button type="submit"> Hapus Email User</button>
</form>
</div>
</body>
</html>