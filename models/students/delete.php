<?php
$stdId = $_GET['id'];

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sqlGrade = "DELETE FROM `diem` WHERE `MaHS` = '$stdId'";
$resultGrade = $conn->query($sqlGrade);

$sqlConduct = "DELETE FROM `hocsinhhanhkiem` WHERE `MaHS` = '$stdId'";
$resultConduct = $conn->query($sqlConduct);

$sqlStudent = "DELETE FROM `hocsinh` WHERE `MaHS` = '$stdId'";
$resultStudent = $conn->query($sqlStudent);
