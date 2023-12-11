<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT ROW_NUMBER() OVER (ORDER BY `MaHS` ASC) AS `STT`,
    `MaHS`,
    `TenHS`,
    `GioiTinh`,
    DATE_FORMAT(NgaySinh, '%d/%m/%Y') AS NgaySinh,
    `SDTHS`,
    `DiaChi`,
    `MaLop` FROM `hocsinh` ORDER BY `MaHS` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['STT'] ?></td>
    <td><?php echo $row['MaHS'] ?></td>
    <td><?php echo $row['TenHS'] ?></td>
    <td><?php echo $row['GioiTinh'] ?></td>
    <td><?php echo $row['NgaySinh'] ?></td>
    <td><?php echo $row['SDTHS'] ?></td>
    <td><?php echo $row['DiaChi'] ?></td>
    <td><?php echo $row['MaLop'] ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['MaHS'] ?>" class="mr-8 text-decoration-none">
            <img class="btn-hover w-20" src="/assets/imgs/pen.svg" alt="Sửa">
        </a>
        <a href="/controllers/Student.php?id=<?php echo $row['MaHS'] ?> " class="text-decoration-none">
            <img class="btn-hover w-20" src="/assets/imgs/trash.svg" alt="Xóa">
        </a>
    </td>
</tr>
<?php
}

$countSql = "SELECT COUNT(*) AS `SoLuong` FROM `hocsinh`";

$countResult = $conn->query($countSql);

if ($countResult->num_rows > 0) {
    $row = $countResult->fetch_assoc();
    $count = $row['SoLuong'];
}

echo "<span>Tổng số học sinh: $count</span>";
?>