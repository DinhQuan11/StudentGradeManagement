<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT ROW_NUMBER() OVER (ORDER BY `hocsinh`.`MaHS` ASC) AS `STT`, 
    `hocsinh`.`MaHS`,
    `hocsinh`.`TenHS`,
    `hocsinh`.`MaLop`,
    `hanhkiem`.`TenHK`
FROM `hocsinhhanhkiem` 
INNER JOIN `hocsinh` ON `hocsinhhanhkiem`.`MaHS` = `hocsinh`.`MaHS`
INNER JOIN `hanhkiem` ON `hocsinhhanhkiem`.`MaHK` = `hanhkiem`.`MaHK`
ORDER BY `MaHS` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['STT'] ?></td>
    <td><?php echo $row['MaHS'] ?></td>
    <td><?php echo $row['TenHS'] ?></td>
    <td><?php echo $row['MaLop'] ?></td>
    <td><?php echo $row['TenHK'] ?></td>
    <td>
        <a href="edit.php?sid=<?php echo $row['MaHS'] ?>" class="btn btn-success">
            Xét hạnh kiểm
        </a>
    </td>
</tr>
<?php
}
?>