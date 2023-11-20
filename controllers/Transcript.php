<?php
require_once '../connection.php';
require_once '../models/logins/student.php';

if ($result) {
    header('Location: ../views/logins/transcript.php');
    exit;
} else {
    header('Location: ../views/logins/student?error=Mã số học sinh không tồn tại!');
    exit;
}
