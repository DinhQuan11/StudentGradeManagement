<?php
if (isset($_POST['studentId'])) {
    $stdId = $_POST['studentId'];
}

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

// $checkExistQuery = "SELECT * FROM `hocsinh` WHERE `MaHS` = '$stdId'";
// $existResult = $conn->query($checkExistQuery);
// $studentExists = mysqli_num_rows($existResult) > 0;

$sql = "SELECT `hocsinh`.`MaHS`,
    `monhoc`.`MaMH`, 
    `monhoc`.`TenMH`, 
    `diem`.`DiemHeSo1`, 
    `diem`.`DiemHeSo2`, 
    `diem`.`DiemHeSo3`,
    ROUND((`diem`.`DiemHeSo1` + ((`diem`.`DiemHeSo2`)*2) + ((`diem`.`DiemHeSo3`)*3)) / 6, 2) AS `DiemTrungBinh`
FROM `diem`
INNER JOIN `hocsinh` ON `diem`.`MaHS` = `hocsinh`.`MaHS`
INNER JOIN `monhoc` ON `diem`.`MaMH` = `monhoc`.`MaMH`
WHERE `hocsinh`.`MaHS` = '$stdId'
ORDER BY `MaMH` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['TenMH'] ?></td>
    <td><?php echo $row['DiemHeSo1'] ?></td>
    <td><?php echo $row['DiemHeSo2'] ?></td>
    <td><?php echo $row['DiemHeSo3'] ?></td>
    <td><?php echo $row['DiemTrungBinh'] ?></td>
</tr>
<?php
}
?>