<?php
include "connect_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Provinsi</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 2px solid black;
            padding: 10px;
        }
        table.alt tr:nth-child(even) {
                background-color: #eee;
            }
        table.alt tr:nth-child(odd) {
                background-color: #fff;
            }
        body{
            font-family: Arial, sans-serif;
            background-color: #e8f5e9;
            padding: 30px;
        }
        h1 {
        text-align: center;
        color: #2e7d32;
        }

button {
    background-color: #388e3c;
    color: white;
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.tambah {
    background-color: #388e3c;
    color: white;
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #1b5e20;
}
    </style>
</head>
<body>
<h1>Tambah Provinsi</h1>
<form action="tambah_provinsi_proses.php" method="post">
<table class="alt">
<tr>
    <th>
        id_provinsi
    </th>
    <th>    
        nama_provinsi
    </th>
    <th>
        kota
    </th>
    <th>
        kecamatan
    </th>
</tr>

<tr>
   <td>
    <input type="number" name="id_provinsi">
   </td>
    <td>
        <input type="text" name = "nama_provinsi">
    </td>
    <td>
            <input type="text" name ="kota">
    </td>
    <td>
        <input type="text" name="kecamatan">
    </td>
</tr>
</table>
<br>
    <input class="tambah" type="submit" value="tambah provinsi">
</form>

<br>
<button onclick="window.location.href='provinsi.php'">
    Kembali
</button>
</body>
</html>