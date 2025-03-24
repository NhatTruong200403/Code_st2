<?php include 'views/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa Sinh Viên</title>
    <style>
        h2 {
            color: #007bff;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            text-align: left;
        }

        label, input, select {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        input, select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        img {
            display: block;
            margin: 10px auto;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2>Sửa Sinh Viên</h2>
    <form action="routes.php?action=edit&MaSV=<?= $student['MaSV'] ?>" method="POST" enctype="multipart/form-data">
        <label>Mã SV:</label>
        <input type="text" name="MaSV" value="<?= $student['MaSV'] ?>" readonly>

        <label>Họ Tên:</label>
        <input type="text" name="HoTen" value="<?= $student['HoTen'] ?>" required>

        <label>Giới Tính:</label>
        <select name="GioiTinh">
            <option value="Nam" <?= $student['GioiTinh'] == "Nam" ? "selected" : "" ?>>Nam</option>
            <option value="Nữ" <?= $student['GioiTinh'] == "Nữ" ? "selected" : "" ?>>Nữ</option>
        </select>

        <label>Ngày Sinh:</label>
        <input type="date" name="NgaySinh" value="<?= $student['NgaySinh'] ?>" required>

        <label>Ảnh hiện tại:</label>
        <img src="<?= $student['Hinh'] ?>" width="100">

        <label>Chọn ảnh mới:</label>
        <input type="file" name="Hinh" accept="image/*">
        <input type="hidden" name="OldHinh" value="<?= $student['Hinh'] ?>">

        <label>Ngành:</label>
        <select name="MaNganh" required>
            <?php while ($row = $majors->fetch_assoc()) : ?>
                <option value="<?= $row['MaNganh'] ?>" <?= $row['MaNganh'] == $student['MaNganh'] ? "selected" : "" ?>>
                    <?= $row['TenNganh'] ?>
                </option>
            <?php endwhile; ?>
        </select>

        <input type="submit" value="Cập Nhật">
    </form>

</body>
</html>
