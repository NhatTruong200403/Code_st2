<?php include 'views/layout/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi Tiết Sinh Viên</title>
</head>
<body>
    <h2>Chi Tiết Sinh Viên</h2>
    <p><strong>Mã SV:</strong> <?= $student['MaSV'] ?></p>
    <p><strong>Họ Tên:</strong> <?= $student['HoTen'] ?></p>
    <p><strong>Giới Tính:</strong> <?= $student['GioiTinh'] ?></p>
    <p><strong>Ngày Sinh:</strong> <?= $student['NgaySinh'] ?></p>
    <p><strong>Ngành:</strong> <?= $student['TenNganh'] ?></p>
    <p><strong>Hình Ảnh:</strong></p>
    <img src="<?= $student['Hinh'] ?>" width="150" alt="Hình Sinh Viên">

    <br><br>
    <a href="routes.php?action=index">Quay lại danh sách</a>
</body>
</html>
