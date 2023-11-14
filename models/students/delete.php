<?php
$stdId = $_GET['sid'];

require_once _DIR_ROOT . '/connection.php';

$sql = "DELETE FROM `hocsinh` WHERE `MaHS` = '$stdId'";

$deleteResult = $conn->query($sql);

try {
    $deleteResult = $conn->query($sql);
    return $deleteResult;
} catch (Exception $e) {
    error_log("MySQL error: " . $e->getMessage());
    return false;
}
