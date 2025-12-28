<?php
include "connect_db.php";

$id = $_POST['user_id'];

$query = "SELECT * FROM users WHERE user_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
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
<h1>Update User</h1>
<form action="update_user_proses.php" method="POST">
    <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">

    <table class="alt">
        <tr>
        <th>denda</th>
        <th>rt</th>
        <th>rw</th>
        <th>jenis_kelamin</th>
        <th>nama_panjang</th>
        <th>nama_panggilan</th>
        <th>id_provinsi</th>
        </tr>

        <tr>
            <td>
              Rp. <input type="number" name="denda" value="<?= $user['denda'] ?>">  
            </td>
            <td>
                <input type="number" name="rt" value="<?= $user['rt'] ?>">
            </td>
            <td>
                <input type="number" name="rw" value="<?= $user['rw'] ?>">
            </td>
             <td>
                <select name="jenis_kelamin">
                    <option value="laki-laki" <?= $user['jenis_kelamin'] == 'laki-laki' ? 'selected' : '' ?>> Laki-laki </option>
                    <option value="perempuan" <?= $user['jenis_kelamin'] == 'perempuan' ? 'selected' : '' ?>> Perempuan</option>
                </select>
            </td>
             <td>
                <input type="text" name="nama_panjang" value="<?= $user['nama_panjang'] ?>">
            </td>
             <td>
                <input type="text" name="nama_panggilan" value="<?= $user['nama_panggilan'] ?>">
            </td>
             <td>
               <select name="id_provinsi" id="">
                <option value="1" <?= $user['id_provinsi'] == 1 ? 'selected' : '' ?>>DIY, Yogyakarta, Gondokusuman</option>
                <option value="2" <?= $user['id_provinsi'] == 2 ? 'selected' : '' ?>>Jawa Tengah, Semarang, Tembalang</option>
                <option value="3" <?= $user['id_provinsi'] == 3 ? 'selected' : '' ?>>Jawa Barat, Bandung, Coblong</option>
                <option value="4" <?= $user['id_provinsi'] == 4 ? 'selected' : '' ?>>DKI Jakarta, Jakarta Selatan, Tebet</option>
                <option value="5" <?= $user['id_provinsi'] == 5 ? 'selected' : '' ?>>Bali, Denpasar, Denpasar Timur</option>
                <option value="6" <?= $user['id_provinsi'] == 6 ? 'selected' : '' ?>>DIY, Bantul, Kasihan</option>
                <option value="7" <?= $user['id_provinsi'] == 7 ? 'selected' : '' ?>>Jawa Timur, Surabaya, Wonokromo</option>
                <option value="8" <?= $user['id_provinsi'] == 8 ? 'selected' : '' ?>>Sumatera Utara, Medan, Medan Kota</option>
                <option value="9" <?= $user['id_provinsi'] == 9 ? 'selected' : '' ?>>Kalimantan Timur, Balikpapan, Balikpapan Selatan</option>
                <option value="10" <?= $user['id_provinsi'] == 10 ? 'selected' : '' ?>>Sulawesi Selatan, Makasar, Panakkukang</option>
            </select>
            </td>
        </tr>
    </table>
    <button type="submit">SIMPAN PERUBAHAN</button>
</form>
<body>
    
</body>
</html>