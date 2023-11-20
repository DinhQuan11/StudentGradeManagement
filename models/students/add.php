<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stdId = $_POST["studentId"];
    $stdName = $_POST["studentName"];
    $stdGender = $_POST["studentGender"];
    $stdDOB = $_POST["studentDOB"];
    $stdNation = $_POST["studentNation"];
    $stdReligion = $_POST["studentReligion"];
    $stdAddress = $_POST["studentAddress"];
    $stdClass = $_POST["studentClass"];

    $sql = "INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `GioiTinh`, `NgaySinh`, `DanToc`, `TonGiao`, `DiaChi`, `MaLop`) VALUES
    ('$stdId', '$stdName', '$stdGender', '$stdDOB', '$stdNation', '$stdReligion', '$stdAddress', '$stdClass');";

    $addResult = null;
    $errorMessage = '';

    try {
        $addResult = $conn->query($sql);
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
}
