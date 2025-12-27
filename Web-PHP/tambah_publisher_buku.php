<?php
include "connect_db.php";

$query = "select * from books_publisher";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Publisher Buku</title>
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
    <h1>Tambah Publisher Buku</h1>
    <form action="tambah_publisher_buku_proses.php" method="post">
    <table class="alt"> 
        <tr>
            <th>
            publisher
            </th>
            <th>
            book_id
            </th>
        </tr>

        <tr>
            <td>
               <input type="text" name="publisher">
            </td>
            <td>
                <input type="number" name="book_id">
            </td>
        </tr>


    </table>
   <br>
<input class="tambah" type="submit" value="TAMBAHKAN PUBLISHER">
</form>
<br>
<button onclick="window.location.href='books_publisher.php'">KEMBALI</button>
</body>
</html>