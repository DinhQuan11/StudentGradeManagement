<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dirRoot = strstr(__DIR__, '\models', true);
    require_once $dirRoot . '/connection.php';

    $username = $conn->real_escape_string($_POST['username']);

    $sql = sprintf(
        "SELECT * FROM `user` WHERE `username` = '%s'",
        $username
    );

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $loginResult = false;
    if ($row) {
        if (password_verify($_POST['password'], $row['Password'])) {
            session_start();
            $_SESSION['user_id'] = $row['Id'];
            $loginResult = true;
        }
    }
}
