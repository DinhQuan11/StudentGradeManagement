<?php
require_once '../connection.php';
require_once '../models/logins/student.php';

if ($result) {
    header('Location: ../views/logins/transcript.php');
    exit;
}
