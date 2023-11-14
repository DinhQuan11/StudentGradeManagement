<?php
if (
    isset($_POST["studentId"]) && $_POST["studentName"] && $_POST["studentGender"]
    && $_POST["studentDOB"] && $_POST["studentNation"] && $_POST["studentReligion"]
    && $_POST["studentAddress"] && $_POST["studentClass"]
) {
    $stdId = $_POST["studentId"];
    $stdName = $_POST["studentName"];
    $stdGender = $_POST["studentGender"];
    $stdDOB = $_POST["studentDOB"];
    $stdNation = $_POST["studentNation"];
    $stdReligion = $_POST["studentReligion"];
    $stdAddress = $_POST["studentAddress"];
    $stdClass = $_POST["studentClass"];
}

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `GioiTinh`, `NgaySinh`, `DanToc`, `TonGiao`, `DiaChi`, `MaLop`) VALUES
('$stdId', '$stdName', '$stdGender', '$stdDOB', '$stdNation', '$stdReligion', '$stdAddress', '$stdClass');";

try {
    $result = $conn->query($sql);
    return $result;
} catch (Exception $e) {
    error_log("MySQL error: " . $e->getMessage());
    return false;
}
