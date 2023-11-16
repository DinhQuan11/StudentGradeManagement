<?php
require_once '../connection.php';
require_once '../models/accounts/add.php';
// require_once '../models/accounts/update.php';
// require_once '../models/accounts/delete.php';
// require_once '../models/accounts/search.php';

if ($addResult || $deleteResult || $updateResult) {
    header('location: ../views/accounts/list.php');
} else {
}
