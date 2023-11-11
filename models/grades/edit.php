<?php
$stdId = $_GET["sid"];
$subjectName = $_GET["sjname"];

$dir = '/VSCode/Website/StudentGradeManagement';
require_once $dir . '/connection.php';

$sql = "SELECT `hocsinh`.`MaLop`, `hocsinh`.`MaHS`, `hocsinh`.`TenHS`, `monhoc`.`TenMH`, `diem`.`DiemHeSo1`, `diem`.`DiemHeSo2`, `diem`.`DiemHeSo3` 
FROM `diem`
INNER JOIN `hocsinh` ON `diem`.`MaHS` = `hocsinh`.`MaHS`
INNER JOIN `monhoc` ON `diem`.`MaMH` = `monhoc`.`MaMH` 
WHERE `hocsinh`.`MaHS` = '$stdId' AND `monhoc`.`TenMH` = '$subjectName'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
