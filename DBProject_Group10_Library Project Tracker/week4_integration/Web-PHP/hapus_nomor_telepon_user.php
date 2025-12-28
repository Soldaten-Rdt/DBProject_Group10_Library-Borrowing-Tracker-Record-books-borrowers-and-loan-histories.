<?php
include "connect_db.php";
$query = "select * from users_nomor_telepon";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Nomor Telepon User</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #d05872ff;
    padding: 30px;
}

h1 {
    text-align: center;
    color: black;
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
    background-color: #ff0000ff;
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
    background-color: #c21a1aff;
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
<body>
<h1>Hapus Nomor Telepon User</h1>
<table class="alt">
<tr>
    <th>    
        nomor_telepon_id
    </th>

    <th>
        nomor_telepon
    </th>
    <th>
        user_id
    </th>
    <th>    </th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?> 
<tr>
    <td>
        <?=  $row["nomor_telepon_id"] ?>
    </td>
     <td>
        <?=  $row["nomor_telepon"] ?>
    </td>
     <td>
        <?=  $row["user_id"] ?>
    </td>
    <td>
       <form action="hapus_nomor_telepon_user_proses.php" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                    <input type="hidden" name="nomor_telepon_id" value="<?= $row['nomor_telepon_id'] ?>">
                    <button type="submit">DELETE</button>
       </form>
    </td>
</tr>
<?php } ?>

</table>
</body>
</html>