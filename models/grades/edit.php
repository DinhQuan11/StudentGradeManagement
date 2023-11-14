<?php
$stdId = $_GET["sid"];
$subjectId = $_GET["sjid"];

require_once _DIR_ROOT . '/connection.php';

$sql = "SELECT `hocsinh`.`MaLop`, `hocsinh`.`MaHS`, `hocsinh`.`TenHS`, `monhoc`.`MaMH`, `monhoc`.`TenMH`, `diem`.`DiemHeSo1`, `diem`.`DiemHeSo2`, `diem`.`DiemHeSo3` 
FROM `diem`
INNER JOIN `hocsinh` ON `diem`.`MaHS` = `hocsinh`.`MaHS`
INNER JOIN `monhoc` ON `diem`.`MaMH` = `monhoc`.`MaMH` 
WHERE `hocsinh`.`MaHS` = '$stdId' AND `monhoc`.`MaMH` = '$subjectId'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
