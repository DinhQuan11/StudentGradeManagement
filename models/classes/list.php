<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT ROW_NUMBER() OVER (ORDER BY `MaLop` ASC) AS `STT`, 
    `MaLop`,
    `TenLop`,
    `SiSoLop` FROM `lophoc` ORDER BY `MaLop` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['STT'] ?></td>
    <td><?php echo $row['MaLop'] ?></td>
    <td><?php echo $row['TenLop'] ?></td>
    <td><?php echo $row['SiSoLop'] ?></td>
    <td>
        <a href="edit.php?sid=<?php echo $row['MaLop'] ?>" class="btn btn-warning">Sửa</a>
        <a href="/controllers/Classes.php?sid=<?php echo $row['MaLop'] ?> " class="btn btn-danger">Xóa</a>
    </td>
</tr>
<?php
}
?>