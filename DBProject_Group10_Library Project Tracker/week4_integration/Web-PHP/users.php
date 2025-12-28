<?php
include "connect_db.php";
$query = "select * from users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
<h1>Users</h1>
<table class="alt">
<tr>
    <th>    
        user_id
    </th>

    <th>
        denda
    </th>
    <th>
        rt
    </th>
    <th>
        rw
    </th>
    <th>
        jenis_kelamin
    </th>
    <th>
        nama_panjang
    </th>
    <th>
        nama_panggilan
    </th>
    <th>
        id_provinsi
    </th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?> 
<tr>
    <td>
        <?=  $row["user_id"] ?>
    </td>
     <td>
        <?=  $row["denda"] ?>
    </td>
     <td>
        <?=  $row["rt"] ?>
    </td>
     <td>
        <?=  $row["rw"] ?>
    </td>
     <td>
        <?=  $row["jenis_kelamin"] ?>
    </td>
     <td>
        <?=  $row["nama_panjang"] ?>
    </td>
     <td>
        <?=  $row["nama_panggilan"] ?>
    </td>
     <td>
        <?=  $row["id_provinsi"] ?>
    </td>
</tr>
<?php } ?>

</table>
<br>
<div class="action-bar">
<form action="users_email.php">
    <button type="submit">list email user</button>
</form>
<br>
<form action="users_nomor_telepon.php">
    <button type="submit">list nomor telepon user</button>
</form>
<br>
<form action="provinsi.php">
    <button type="submit">list provinsi</button>
</form>
<br>
<form action="tambah_user.php" method="POST">
    <button type="submit">Tambahkan Data User</button>
</form>
<br>
<form action="update_user.php" method="POST">
    <button type="submit">Update Data User</button>
</form>
<br>
<form action="hapus_user.php" method="POST">
    <button type="submit"> Hapus Data User</button>
</form>
</div>
</body>
</html>