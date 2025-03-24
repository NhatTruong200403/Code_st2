<?php include 'views/layout/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
    <style>
        h2 {
            color: #007bff;
            text-transform: uppercase;
        }

        p {
            font-size: 18px;
            color: #333;
        }

        img {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
        }


        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        a {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            display: inline-block;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h2>ĐĂNG NHẬP</h2>
    <form action="routes.php?action=login" method="POST">
        Mã SV: <input type="text" name="MaSV" required><br>
        <input type="submit" value="Đăng Nhập">
    </form>
</body>

</html>