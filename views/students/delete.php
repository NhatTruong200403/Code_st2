<?php include 'views/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Xác Nhận Xóa</title>
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

        .a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .a:hover {
            background-color: #0056b3;
        }
        .n {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color:rgb(32, 91, 154);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .n:hover {
            background-color:rgb(52, 78, 107);
        }
    </style>
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
            <input class="n" type="submit" value="Xóa">
            <a class="a" href="routes.php?action=index">Hủy</a>
        </form>


</body>

</html>