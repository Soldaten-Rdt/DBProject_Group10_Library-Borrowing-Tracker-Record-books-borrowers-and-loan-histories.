<?php
include "connect_db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
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
    <h1>Tambah Buku</h1>
    <form action="books_tambah_proses.php" method="post">
    <table class="alt"> 
        <tr>
            <th>
            book_id
            <th>
            judul
            <th>
            isbn
            </th>
            <th>
            tahun_publikasi
            </th>
            <th>
            deskripsi
            </th>
            <th>
            stock
            </th>
            <th>
            bisa_dipinjam
            </th>
            <th>
            kondisi
            </th>
        </tr>

        <tr>
            <td>
                AUTO_INCREMENT
            </td>
            <td>
                    <input type="text" name="judul">
            </td>
            <td>
                    <input type="text" name="isbn">
            </td>
            <td>
                    <input type="date" name="tahun_publikasi">
            </td>
            <td>
                    <textarea maxlength="1000" name="deskripsi">Enter comments here.</textarea>
            </td>
            <td>
                    <input type="number" name ="stock">
            </td>
            <td>
                    <select name="bisa_dipinjam" id="">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                    </select>
            </td>
            <td>
                    <select name="kondisi" id="">
                        <option value="Sempurna">Sempurna</option>
                        <option value="Baik">Baik</option>
                        <option value="Lumayan">Lumayan</option>
                        <option value="Buruk">Buruk</option>
                        <option value="Rusak">Rusak</option>
                        <option value="Hilang">Hilang</option>
                    </select>
    
            </td>
        </tr>   
        </table>
        <br>
        <input class="tambah" type="submit" value="tambah_buku">
        </form>
        <br>
    <button onclick="window.location.href='books.php'">
    Kembali
    </button>
        </body>
        </html>