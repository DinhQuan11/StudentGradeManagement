<?php
$dir = '/VSCode/Website/StudentGradeManagement';
require_once $dir . '/connection.php';

$sql = "SELECT ROW_NUMBER() OVER (ORDER BY `hocsinh`.`MaHS` ASC) AS `STT`, 
    `hocsinh`.`MaLop`, 
    `hocsinh`.`MaHS`, 
    `hocsinh`.`TenHS`, 
    `monhoc`.`TenMH`, 
    `diem`.`DiemHeSo1`, 
    `diem`.`DiemHeSo2`, 
    `diem`.`DiemHeSo3`,
    ROUND((`diem`.`DiemHeSo1` + ((`diem`.`DiemHeSo2`)*2) + ((`diem`.`DiemHeSo3`)*3)) / 6, 2) AS `DiemTrungBinh` 
FROM `diem`
INNER JOIN `hocsinh` ON `diem`.`MaHS` = `hocsinh`.`MaHS`
INNER JOIN `monhoc` ON `diem`.`MaMH` = `monhoc`.`MaMH`
ORDER BY `MaHS` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['STT'] ?></td>
    <td><?php echo $row['MaLop'] ?></td>
    <td><?php echo $row['MaHS'] ?></td>
    <td><?php echo $row['TenHS'] ?></td>
    <td><?php echo $row['TenMH'] ?></td>
    <td><?php echo $row['DiemHeSo1'] ?></td>
    <td><?php echo $row['DiemHeSo2'] ?></td>
    <td><?php echo $row['DiemHeSo3'] ?></td>
    <td><?php echo $row['DiemTrungBinh'] ?></td>
    <td>
        <a href="edit.php?sid=<?php echo $row['MaHS'] ?>&sjname=<?php echo $row['TenMH'] ?>" class="btn btn-success">
            Nhập điểm
        </a>
    </td>
</tr>
<?php
}
?>