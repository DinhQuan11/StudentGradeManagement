<?php
$idStd = $_GET["sid"];

$dir = '/VSCode/Website/StudentGradeManagement';
require_once $dir . '/connection.php';

$sql = "SELECT * FROM `hocsinh` WHERE `MaHS` = '$idStd'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
