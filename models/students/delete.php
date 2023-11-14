<?php
$stdId = $_GET['sid'];

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "DELETE FROM `hocsinh` WHERE `MaHS` = '$stdId'";

$deleteResult = $conn->query($sql);

try {
    $deleteResult = $conn->query($sql);
    return $deleteResult;
} catch (Exception $e) {
    error_log("MySQL error: " . $e->getMessage());
    return false;
}
