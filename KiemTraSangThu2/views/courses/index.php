<?php include 'views/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Học Phần</title>
    <style>

        h2 {
            color: #007bff;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .a{
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>DANH SÁCH HỌC PHẦN</h2>
    <table>
        <tr>
            <th>Mã Học Phần</th>
            <th>Tên Học Phần</th>
            <th>Số Tín Chỉ</th>
            <th>Hành Động</th>
        </tr>
        <?php foreach ($courses as $course) : ?>
        <tr>
            <td><?= $course['MaHP'] ?></td>
            <td><?= $course['TenHP'] ?></td>
            <td><?= $course['SoTinChi'] ?></td>
            <td><a class="a" href="routes.php?action=registerCourse&MaHP=<?= urlencode($course['MaHP']) ?>">Đăng Ký</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
