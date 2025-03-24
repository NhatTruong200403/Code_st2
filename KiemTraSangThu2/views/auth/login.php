<?php include 'views/layout/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
</head>
<body>
    <h2>ĐĂNG NHẬP</h2>
    <form action="routes.php?action=login" method="POST">
        Mã SV: <input type="text" name="MaSV" required><br>
        <input type="submit" value="Đăng Nhập">
    </form>
</body>
</html>
