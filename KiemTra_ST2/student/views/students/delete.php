<?php include 'views/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xác Nhận Xóa</title>
</head>
<body>
    <h2>Xác Nhận Xóa Sinh Viên</h2>
    <p><strong>Mã SV:</strong> <?= $student['MaSV'] ?></p>
    <p><strong>Họ Tên:</strong> <?= $student['HoTen'] ?></p>
    <p><strong>Giới Tính:</strong> <?= $student['GioiTinh'] ?></p>
    <p><strong>Ngày Sinh:</strong> <?= $student['NgaySinh'] ?></p>
    <p><strong>Ngành:</strong> <?= $student['TenNganh'] ?></p>
    <p><strong>Hình Ảnh:</strong></p>
    <img src="<?= $student['Hinh'] ?>" width="150" alt="Hình Sinh Viên">

    <br><br>
    <p>Bạn có chắc chắn muốn xóa sinh viên này không?</p>
    <form action="routes.php?action=delete&MaSV=<?= $student['MaSV'] ?>" method="POST">
        <input type="submit" value="Xóa">
        <a href="routes.php?action=index">Hủy</a>
    </form>
</body>
</html>
