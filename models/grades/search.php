<?php
if (isset($_POST["searchClass"]) && ($_POST["searchSubject"])) {
    $searchClass = $_POST["searchClass"];
    $searchSubject = $_POST["searchSubject"];
}

echo '<span class="search-title">Lớp: ' . $searchClass . '</span><br/>';
echo '<span class="search-title">Môn học: ' . $searchSubject . '</span>';


require_once _DIR_ROOT . '/connection.php';

$sql = "SELECT ROW_NUMBER() OVER (ORDER BY `hocsinh`.`MaHS` ASC) AS `STT`,
    `hocsinh`.`MaHS`, 
    `hocsinh`.`TenHS`, 
    `monhoc`.`MaMH`, 
    `monhoc`.`TenMH`, 
    `diem`.`DiemHeSo1`, 
    `diem`.`DiemHeSo2`, 
    `diem`.`DiemHeSo3`,
    ROUND((`diem`.`DiemHeSo1` + ((`diem`.`DiemHeSo2`)*2) + ((`diem`.`DiemHeSo3`)*3)) / 6, 2) AS `DiemTrungBinh`
FROM `diem`
INNER JOIN `hocsinh` ON `diem`.`MaHS` = `hocsinh`.`MaHS`
INNER JOIN `monhoc` ON `diem`.`MaMH` = `monhoc`.`MaMH`
WHERE `hocsinh`.`MaLop` = '$searchClass' AND `monhoc`.`TenMH` = '$searchSubject'
ORDER BY `MaHS` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row['STT'] ?></td>
        <td><?php echo $row['MaHS'] ?></td>
        <td><?php echo $row['TenHS'] ?></td>
        <td><?php echo $row['DiemHeSo1'] ?></td>
        <td><?php echo $row['DiemHeSo2'] ?></td>
        <td><?php echo $row['DiemHeSo3'] ?></td>
        <td><?php echo $row['DiemTrungBinh'] ?></td>
        <td>
            <a href="edit.php?sid=<?php echo $row['MaHS'] ?>&sjid=<?php echo $row['MaMH'] ?>" class="btn btn-success">
                Nhập điểm
            </a>
        </td>
    </tr>
<?php
}
?>