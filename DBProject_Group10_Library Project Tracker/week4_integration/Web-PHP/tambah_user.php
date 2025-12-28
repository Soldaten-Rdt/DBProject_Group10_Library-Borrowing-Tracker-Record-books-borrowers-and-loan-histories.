<?php
include "connect_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Users</title>
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
<h1>Tambah User</h1>
<form action="tambah_user_proses.php" method="post">
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

<tr>
    <td>
       AUTO_INCREMENT
    </td>
    <td>
           Rp.<input type="number" name = "denda">
    </td>
    <td>
            <input type="text" name = "rt">
    </td>
    <td>
            <input type="text" name = "rw">
    </td>
    <td>
            <select name="jenis_kelamin" id="">
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
            </select>
    </td>
    <td>
            <input type="text" name = "nama_panjang">
    </td>
    <td>
            <input type="text" name = "nama_panggilan">
    </td>
    <td>
            <select name="id_provinsi" id="">
                <option value="1">DIY, Yogyakarta, Gondokusuman</option>
                <option value="2">Jawa Tengah, Semarang, Tembalang</option>
                <option value="3">Jawa Barat, Bandung, Coblong</option>
                <option value="4">DKI Jakarta, Jakarta Selatan, Tebet</option>
                <option value="5">Bali, Denpasar, Denpasar Timur</option>
                <option value="6">DIY, Bantul, Kasihan</option>
                <option value="7">Jawa Timur, Surabaya, Wonokromo</option>
                <option value="8">Sumatera Utara, Medan, Medan Kota</option>
                <option value="9">Kalimantan Timur, Balikpapan, Balikpapan Selatan</option>
                <option value="10">Sulawesi Selatan, Makasar, Panakkukang</option>
            </select>
    </td>
</tr>
</table>
<br>
    <input class="tambah" type="submit" value="tambah_user">
</form>

<br>
<button onclick="window.location.href='users.php'">
    Kembali
</button>
</body>
</html>