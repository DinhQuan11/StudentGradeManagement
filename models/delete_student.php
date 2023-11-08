<?php
$stdId = $_GET['sid'];

require_once '../connection.php';

$sql = "DELETE FROM `hocsinh` WHERE `MaHS` = '$stdId'";

$result = $conn->query($sql);
