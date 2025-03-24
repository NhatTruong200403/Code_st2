<?php include 'views/layout/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa Sinh Viên</title>
</head>
<body>
    <h2>Sửa Sinh Viên</h2>
    <form action="routes.php?action=edit&MaSV=<?= $student['MaSV'] ?>" method="POST" enctype="multipart/form-data">
        Mã SV: <input type="text" name="MaSV" value="<?= $student['MaSV'] ?>" readonly><br>
        Họ Tên: <input type="text" name="HoTen" value="<?= $student['HoTen'] ?>" required><br>
        Giới Tính: 
        <select name="GioiTinh">
            <option value="Nam" <?= $student['GioiTinh'] == "Nam" ? "selected" : "" ?>>Nam</option>
            <option value="Nữ" <?= $student['GioiTinh'] == "Nữ" ? "selected" : "" ?>>Nữ</option>
        </select><br>
        Ngày Sinh: <input type="date" name="NgaySinh" value="<?= $student['NgaySinh'] ?>" required><br>
        
        <img src="<?= $student['Hinh'] ?>" width="100"><br>
        Ảnh mới: <input type="file" name="Hinh" accept="image/*"><br>
        <input type="hidden" name="OldHinh" value="<?= $student['Hinh'] ?>">

        Ngành: 
        <select name="MaNganh" required>
            <?php while ($row = $majors->fetch_assoc()) : ?>
                <option value="<?= $row['MaNganh'] ?>" <?= $row['MaNganh'] == $student['MaNganh'] ? "selected" : "" ?>>
                    <?= $row['TenNganh'] ?>
                </option>
            <?php endwhile; ?>
        </select><br>

        <input type="submit" value="Cập Nhật">
    </form>
</body>
</html>
