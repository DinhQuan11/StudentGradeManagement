<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stdId = $_POST["studentId"];
    $subjectId = $_POST["subjectId"];
    $grade1 = $_POST["grade1"];
    $grade2 = $_POST["grade2"];
    $grade3 = $_POST["grade3"];
}

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "UPDATE `diem` SET `DiemHeSo1` = '$grade1', `DiemHeSo2` = '$grade2', `DiemHeSo3` = '$grade3'
WHERE `MaHS` = '$stdId' AND `MaMH` = '$subjectId'";

try {
    $updateResult = $conn->query($sql);
    return $updateResult;
} catch (Exception $e) {
    error_log("MySQL error: " . $e->getMessage());
    return false;
}
