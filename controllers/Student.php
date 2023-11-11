<?php
require_once '../connection.php';
require_once '../models/students/add.php';
require_once '../models/students/update.php';
require_once '../models/students/delete.php';
require_once '../models/students/search.php';

if ($addResult || $deleteResult || $updateResult) {
    header('location: ../views/students/list.php');
} else {
}
