<?php
$idStd = $_GET['sid'];

require_once '../connection.php';

$sql = "DELETE FROM `hocsinh` WHERE `MaHS` = '$idStd'";

$result = $conn->query($sql);
