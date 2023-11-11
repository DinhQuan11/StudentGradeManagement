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

$dir = '/VSCode/Website/StudentGradeManagement';
require_once $dir . '/connection.php';

$sql = "UPDATE `hocsinh` SET `TenHS` = '$stdName', `GioiTinh` = '$stdGender', `NgaySinh` = '$stdDOB', 
`DanToc` = '$stdNation', `TonGiao` = '$stdReligion', `DiaChi` = '$stdAddress', `MaLop` = '$stdClass'
WHERE `MaHS` = '$stdId';";

try {
    $updateResult = $conn->query($sql);
    return $updateResult;
} catch (Exception $e) {
    error_log("MySQL error: " . $e->getMessage());
    return false;
}
