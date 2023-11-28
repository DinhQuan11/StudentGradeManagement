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
        <a href="edit.php?sid=<?php echo $row['MaGV'] ?>" class="mr-8 text-decoration-none">
            <img class="btn-hover w-20" src="/assets/imgs/pen.svg" alt="Sửa">
        </a>
        <a href="/controllers/Classes.php?sid=<?php echo $row['MaGV'] ?> " class="text-decoration-none">
            <img class="btn-hover w-20" src="/assets/imgs/trash.svg" alt="Xóa">
        </a>
    </td>
</tr>
<?php
}
?>