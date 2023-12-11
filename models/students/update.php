<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stdId = $_POST['studentId'];
    $stdName = $_POST['studentName'];
    $stdGender = $_POST['studentGender'];
    $stdDOB = $_POST['studentDOB'];
    $stdPhone = $_POST['studentPhone'];
    $stdAddress = $_POST['studentAddress'];
    $stdClass = $_POST['studentClass'];
}

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "UPDATE `hocsinh` SET 
    `TenHS` = '$stdName', 
    `GioiTinh` = '$stdGender', 
    `NgaySinh` = '$stdDOB', 
    `SDTHS` = '$stdPhone',
    `DiaChi` = '$stdAddress', 
    `MaLop` = '$stdClass'
    WHERE `MaHS` = '$stdId';";

try {
    $updateResult = $conn->query($sql);
    return $updateResult;
} catch (Exception $e) {
    error_log("MySQL error: " . $e->getMessage());
    return false;
}
