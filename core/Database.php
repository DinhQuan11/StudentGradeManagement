<?php
class Database
{
    private $__conn;
    function __construct()
    {
        global $db_config;
        $this->__conn = Connection::getInstance($db_config);
    }
}
