<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản Lý Sinh Viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff;
            overflow: hidden;
            display: flex;
            padding: 10px 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            font-size: 16px;
            transition: background 0.3s, color 0.3s;
        }

        .navbar a:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }

        .navbar a.active {
            background-color: #0056b3;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="routes.php?action=index">Nhật Trường</a>
        <a href="routes.php?action=index">Sinh Viên</a>
        <a href="routes.php?action=courses">Học Phần</a>
        <a href="routes.php?action=registerCourse">Đăng Kí</a>
        <a href="routes.php?action=loginForm">Đăng Nhập</a>
    </div>
</body>
</html>
