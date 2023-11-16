<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../logins/admin.php');
    exit();
}
