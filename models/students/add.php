<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stdId = $_POST['studentId'];
    $stdName = $_POST['studentName'];
    $stdGender = $_POST['studentGender'];
    $stdDOB = $_POST['studentDOB'];
    $stdPhone = $_POST['studentPhone'];
    $stdAddress = $_POST['studentAddress'];
    $stdClass = $_POST['studentClass'];

    $checkExistQuery = "SELECT * FROM `hocsinh` WHERE `MaHS` = '$stdId'";
    $result = $conn->query($checkExistQuery);

    if ($result->num_rows > 0) {
        $existStudentError = "Mã số học sinh đã tồn tại!";
    } else {
        $sql = "INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `GioiTinh`, `NgaySinh`, `SDTHS`, `DiaChi`, `MaLop`) VALUES
            ('$stdId', '$stdName', '$stdGender', '$stdDOB', '$stdPhone', '$stdAddress', '$stdClass');";
        $addResult = $conn->query($sql);
    }
}
