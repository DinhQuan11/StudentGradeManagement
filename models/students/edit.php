<?php
$idStd = $_GET["id"];

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT * FROM `hocsinh` WHERE `MaHS` = '$idStd'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
