<?php include 'views/layout/header.php'; ?>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f8f9fa;
    }

    a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        border: 1px solid #dee2e6;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    td img {
        border-radius: 5px;
    }

    td a {
        padding: 5px 10px;
        border-radius: 5px;
    }

    td a:hover {
        background-color: #007bff;
        color: white;
    }
</style>

<a href="routes.php?action=create">Thêm sinh viên</a>
<table border="1">
    <tr>
        <th>MaSV</th>
        <th>HoTen</th>
        <th>GioiTinh</th>
        <th>NgaySinh</th>
        <th>Hình</th>
        <th>MaNganh</th>
        <th>Hành động</th>
    </tr>
    <?php while ($row = $students->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['MaSV'] ?></td>
            <td><?= $row['HoTen'] ?></td>
            <td><?= $row['GioiTinh'] ?></td>
            <td><?= $row['NgaySinh'] ?></td>
            <td><img src="<?= $row['Hinh'] ?>" width="50"></td>
            <?= $row['Hinh'] ?>
            <td><?= $row['MaNganh'] ?></td>
            <td>
                <a href="routes.php?action=edit&MaSV=<?= $row['MaSV'] ?>">Edit</a> |
                <a href="routes.php?action=detail&MaSV=<?= $row['MaSV'] ?>">Detail</a> |
                <a href="routes.php?action=confirmDelete&MaSV=<?= $row['MaSV'] ?>">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
