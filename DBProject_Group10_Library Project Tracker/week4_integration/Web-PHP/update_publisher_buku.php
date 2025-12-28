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
    <title>Update Publisher Buku</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #aaa595ff;
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
<body>
<h1>Update Publisher Buku</h1>
<table class="alt">
<tr>
    <th>    
        publisher_id
    </th>

    <th>
        publisher
    </th>
    <th>
        book_id
    </th>
    <th>
    </th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?> 
<tr>
    <td>
        <?=  $row["publisher_id"] ?>
    </td>
     <td>
        <?=  $row["publisher"] ?>
    </td>
     <td>
        <?=  $row["book_id"] ?>
    </td>
    <td>
        <form action="update_book_publisher_form.php" method="POST">
            <input type="hidden" name="publisher_id" value="<?= $row['publisher_id'] ?>">
            <button type="submit" id="">UPDATE</button>
        </form>
    </td>
</tr>
<?php } ?>

</table>
</body>
</html>