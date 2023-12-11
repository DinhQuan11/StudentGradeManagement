<?php
require_once '../connection.php';
require_once '../models/logins/home.php';

if ($loginResult && isset($_SESSION['user_id'])) {
    header('location: ../views/logins/home.php');
    exit();
} else {
    $loginErrors = "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin!";
    $loginError = urlencode('Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin!');
    // header('location: ../views/logins/admin.php?error=' . $loginError);
    header('location: ../views/logins/admin.php');
    exit();
}
