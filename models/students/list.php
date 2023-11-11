<?php
$dir = '/VSCode/Website/StudentGradeManagement';
require_once $dir . '/connection.php';

$sql = "SELECT * FROM `hocsinh` ORDER BY `MaHS` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['MaHS'] ?></td>
    <td><?php echo $row['TenHS'] ?></td>
    <td><?php echo $row['GioiTinh'] ?></td>
    <td><?php echo $row['NgaySinh'] ?></td>
    <td><?php echo $row['DanToc'] ?></td>
    <td><?php echo $row['TonGiao'] ?></td>
    <td><?php echo $row['DiaChi'] ?></td>
    <td><?php echo $row['MaLop'] ?></td>
    <td>
        <a href="edit.php?sid=<?php echo $row['MaHS'] ?>" class="btn btn-warning">Sửa</a>
        <a href="/controllers/Student.php?sid=<?php echo $row['MaHS'] ?> " class="btn btn-danger">Xóa</a>
    </td>
</tr>
<?php
}
?>