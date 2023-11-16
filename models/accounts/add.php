<?php
$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "INSERT INTO `user` (`Username`, `Password`, `Role`) 
VALUES (?, ?, ?)";

$stmt = $conn->stmt_init();

if (!$stmt->prepare($sql)) {
    die("" . $stmt->error);
}

$stmt->bind_param("sss", $_POST['username'], $password_hash, $_POST['role']);

$addResult =  $stmt->execute();
