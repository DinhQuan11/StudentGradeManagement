<?php
session_start();
session_destroy();
header('Location: ../views/logins/admin.php');
exit();
