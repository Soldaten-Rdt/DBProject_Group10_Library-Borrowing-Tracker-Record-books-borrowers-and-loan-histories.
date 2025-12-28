<?php
include "connect_db.php";

$id_provinsi = $_POST['id_provinsi'];

$query = "SELECT * FROM provinsi WHERE id_provinsi = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id_provinsi);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$provinsi = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Provinsi</title>
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
<h1>Update Provinsi</h1>
<form action="update_provinsi_proses.php" method="POST">
    <input type="hidden" name="id_provinsi" value="<?= $provinsi['id_provinsi'] ?>">

    <table class="alt">
        <tr>
        <th>id_provinsi</th>
        <th>nama_provinsi</th>
        <th>kota</th>
        <th>kecamatan</th>
        </tr>

        <tr>
            <td>
              <?= $provinsi['id_provinsi'] ?>
            </td>
            <td>
                <input type="text" name="nama_provinsi" value="<?= $provinsi['nama_provinsi'] ?>">
            </td>
            <td>
                <input type="text" name="kota" value="<?= $provinsi['kota'] ?>">
            </td>
             <td>
                <input type="text" name="kecamatan" value="<?= $provinsi['kecamatan'] ?>">
            </td>
        </tr>
    </table>
    <button type="submit">SIMPAN PERUBAHAN</button>
</form>
<body>
    
</body>
</html>