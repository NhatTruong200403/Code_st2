<?php include 'views/layout/header.php'; ?>

<h2>Học Phần Đã Đăng Ký</h2>
<table border="1">
    <tr>
        <th>Mã Học Phần</th>
        <th>Tên Học Phần</th>
        <th>Số Tín Chỉ</th>
        <th>Ngày Đăng Ký</th>
    </tr>
    <?php foreach ($registrations as $reg) : ?>
    <tr>
        <td><?= htmlspecialchars($reg['MaHP']) ?></td>
        <td><?= htmlspecialchars($reg['TenHP']) ?></td>
        <td><?= htmlspecialchars($reg['SoTinChi']) ?></td>
        <td><?= htmlspecialchars($reg['NgayDK']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
