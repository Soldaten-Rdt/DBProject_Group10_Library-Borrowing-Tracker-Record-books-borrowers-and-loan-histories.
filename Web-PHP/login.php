<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Perpustakaan</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6d4c41, #a1887f);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            width: 380px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            text-align: center;
        }

        h1 {
            margin-bottom: 10px;
            color: #5d4037;
        }

        p {
            margin-bottom: 25px;
            color: #555;
            font-size: 14px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border-radius: 6px;
            border: 1px solid #aaa;
            font-size: 14px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #6d4c41;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #6d4c41;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4e342e;
        }

        .footer-text {
            margin-top: 18px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h1>Perpustakaan App</h1>
        <p>Please log in to your account</p>

        <form action="dashboard.php" method="post">
            <label>Email / Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <div class="footer-text">
            © 2025 Perpustakaan Database Nugroho.Nathaniel.Christian
        </div>
    </div>

</body>
</html>
