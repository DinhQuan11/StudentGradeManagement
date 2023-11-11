<?php
if (
    isset($_POST["studentId"]) && $_POST["grade1"]
    && $_POST["grade2"] && $_POST["grade3"]
) {
    $stdId = $_POST["studentId"];
    $grade1 = $_POST["grade1"];
    $grade2 = $_POST["grade2"];
    $grade3 = $_POST["grade3"];
}

$dir = '/VSCode/Website/StudentGradeManagement';
require_once $dir . '/connection.php';

$sql = "UPDATE `diem` SET `DiemHeSo1` = '$grade1', `DiemHeSo2` = '$grade2', `DiemHeSo3` = '$grade3'
WHERE `MaHS` = '$stdId'";

try {
    $updateResult = $conn->query($sql);
    return $updateResult;
} catch (Exception $e) {
    error_log("MySQL error: " . $e->getMessage());
    return false;
}
