<?php
if (isset($_POST['studentId'])) {
    $stdId = $_POST['studentId'];
}

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT `hocsinh`.`MaHS`, 
    `hocsinh`.`TenHS`, 
    `hocsinh`.`GioiTinh`,
    `hocsinh`.`NgaySinh`,
    `hocsinh`.`MaLop`,
    `monhoc`.`MaMH`, 
    `monhoc`.`TenMH`
FROM `diem`
INNER JOIN `hocsinh` ON `diem`.`MaHS` = `hocsinh`.`MaHS`
INNER JOIN `monhoc` ON `diem`.`MaMH` = `monhoc`.`MaMH`
WHERE `hocsinh`.`MaHS` = '$stdId'
ORDER BY `MaMH` ASC";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
