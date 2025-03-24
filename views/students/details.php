<?php include 'views/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi Tiết Sinh Viên</title>
    <style>

        h2 {
            color: #007bff;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
            text-align: left;
        }

        p {
            font-size: 16px;
            margin: 10px 0;
        }

        strong {
            color: #333;
        }

        img {
            display: block;
            margin: 10px auto;
            border-radius: 8px;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
        }

        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2>Chi Tiết Sinh Viên</h2>
    <div class="container">
        <p><strong>Mã SV:</strong> <?= $student['MaSV'] ?></p>
        <p><strong>Họ Tên:</strong> <?= $student['HoTen'] ?></p>
        <p><strong>Giới Tính:</strong> <?= $student['GioiTinh'] ?></p>
        <p><strong>Ngày Sinh:</strong> <?= $student['NgaySinh'] ?></p>
        <p><strong>Ngành:</strong> <?= $student['TenNganh'] ?></p>
        <p><strong>Hình Ảnh:</strong></p>
        <img src="<?= $student['Hinh'] ?>" width="150" alt="Hình Sinh Viên">

        <a href="routes.php?action=index">Quay lại danh sách</a>
    </div>

</body>
</html>
