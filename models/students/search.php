<?php
if (isset($_POST["searchInput"])) {
    $search = $_POST["searchInput"];
}

echo '<span class="search-title">Lớp: ' . $search . '</span>';

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT ROW_NUMBER() OVER (ORDER BY `MaHS` ASC) AS `STT`,
    `MaHS`,
    `TenHS`,
    `GioiTinh`,
    `NgaySinh`,
    DATE_FORMAT(NgaySinh, '%d/%m/%Y') AS NgaySinh,
    `SDTHS`,
    `DiaChi`,
    `MaLop` FROM `hocsinh` WHERE `MaLop` = '$search' ORDER BY `MaHS` ASC";

$searchResult = $conn->query($sql);

while ($row = $searchResult->fetch_assoc()) {
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

$countSql = "SELECT COUNT(*) AS `SoLuong` FROM `hocsinh`     WHERE `MaLop` = '$search'";

$countResult = $conn->query($countSql);

if ($countResult->num_rows > 0) {
    $row = $countResult->fetch_assoc();
    $count = $row['SoLuong'];
}

echo "<span class='quantity'>Sĩ số lớp: $count học sinh</span>";
?>