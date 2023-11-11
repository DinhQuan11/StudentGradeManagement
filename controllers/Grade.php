<?php
require_once '../connection.php';
require_once '../models/grades/update.php';

if ($updateResult) {
    header('location: ../views/grades/list.php');
} else {
}
