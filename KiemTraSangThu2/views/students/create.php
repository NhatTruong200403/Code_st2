<?php include 'views/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Sinh Viên</title>
    <style>

        h2 {
            color: #007bff;
        }

        form {
            background: white;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
    <form action="routes.php?action=create" method="POST" enctype="multipart/form-data">
    <h2>Thêm Sinh Viên</h2>
        Mã SV: <input type="text" name="MaSV" required><br>
        Họ Tên: <input type="text" name="HoTen" required><br>
        Giới Tính: 
        <select name="GioiTinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select><br>
        Ngày Sinh: <input type="date" name="NgaySinh" required><br>
        Ảnh: <input type="file" name="Hinh" accept="image/*" required><br>

        Ngành: 
        <select name="MaNganh" required>
            <?php while ($row = $majors->fetch_assoc()) : ?>
                <option value="<?= $row['MaNganh'] ?>"><?= $row['TenNganh'] ?></option>
            <?php endwhile; ?>
        </select><br>

        <input type="submit" value="Thêm">
    </form>
</body>
</html>
