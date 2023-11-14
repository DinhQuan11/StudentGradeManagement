<?php
$idStd = $_GET["sid"];

require_once _DIR_ROOT . '/connection.php';

$sql = "SELECT * FROM `hocsinh` WHERE `MaHS` = '$idStd'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
