<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT * FROM `giaovien` ORDER BY `MaGV` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row['MaGV'] ?></td>
        <td><?php echo $row['TenGV'] ?></td>
        <td><?php echo $row['SDTGV'] ?></td>
        <td><?php echo $row['EmailGV'] ?></td>
        <td>
            <a href="edit.php?sid=<?php echo $row['MaGV'] ?>" class="btn btn-warning">Sửa</a>
            <a href="/controllers/Classes.php?sid=<?php echo $row['MaGV'] ?> " class="btn btn-danger">Xóa</a>
        </td>
    </tr>
<?php
}
?>