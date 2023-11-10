<?php
$stdId = $_GET['sid'];

$dir = '/VSCode/Website/StudentGradeManagement';
require_once $dir . '/connection.php';

$sql = "DELETE FROM `hocsinh` WHERE `MaHS` = '$stdId'";

$deleteResult = $conn->query($sql);

try {
    $deleteResult = $conn->query($sql);
    return $deleteResult;
} catch (Exception $e) {
    error_log("MySQL error: " . $e->getMessage());
    return false;
}
