<!DOCTYPE html>
<html>
<head>
    <title>Admin Login | UniEvent</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        }
        .login-box {
            width: 300px;
            margin: 120px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
        }
        button {
            padding: 10px;
            width: 100%;
            background: #0056b3;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <form action="login_check.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
