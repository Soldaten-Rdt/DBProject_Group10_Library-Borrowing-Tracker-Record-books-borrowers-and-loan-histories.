<?php
include "connect_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Perpustakaan</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #d7ccc8, #bcaaa4);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dashboard-box {
            background-color: #ffffff;
            padding: 35px 45px;
            border-radius: 14px;
            width: 420px;
            box-shadow: 0 10px 25pxrgba(0,0,0,0.3);
            text-align: center;
        }

        h1 {
            margin-bottom: 10px;
            color: #4e342e;
        }

        p {
            margin-bottom: 30px;
            color: #555;
            font-size: 14px;
        }

        .menu {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .menu form {
            margin: 0;
        }

        .menu button {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: 0.2s;
        }

        .books {
            background-color: #6d4c41;
            color: white;
        }

        .users {
            background-color: #8d6e63;
            color: white;
        }

        .borrow {
            background-color: #a1887f;
            color: white;
        }

        .menu button:hover {
            transform: scale(1.03);
            opacity: 0.9;
        }

        .footer-text {
            margin-top: 25px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="dashboard-box">
        <h1>Dashboard</h1>
        <p>Welcome to Perpustakaan Database App</p>

        <div class="menu">
            <form action="books.php" method="POST">
                <button type="submit" class="books">Books</button>
            </form>

            <form action="users.php" method="POST">
                <button type="submit" class="users">Users</button>
            </form>

            <form action="borrow.php" method="POST">
                <button type="submit" class="borrow">Peminjaman</button>
            </form>

            <form action="borrow_detail.php" method="POST">
                <button type="submit" class="borrow_detail">Detail Peminjaman</button>
            </form>
        </div>

        <div class="footer-text">
            © 2025 Perpustakaan Database Nugroho.Nathaniel.Christian
        </div>
    </div>

</body>
</html>
