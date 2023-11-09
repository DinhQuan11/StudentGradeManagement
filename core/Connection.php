<?php
class Connection
{
    private static $instance = null;
    private static $conn = null;
    private function __construct($config)
    {
        // Kết nối database
        try {
            // Cấu hình dsn
            $dsn = 'mysql:dbname=' . $config['db'] . ';host=' . $config['host'];

            // Cấu hình $options
            /**
             * Cấu hình uft8
             * Cấu hình ngoại lệ khi truy vấn bị lỗi
             */
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES uft8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            // Câu lệnh kết nối
            $con = new PDO($dsn, $config['user'], '', $options);
            self::$conn = $con;
        } catch (Exception $exception) {
            $mess = $exception->getMessage();
            if (preg_match('/Access denied for user/', $mess)) {
                die('Lỗi kết nối cơ sở dữ liệu');
            }
            if (preg_match('/Unknown database/', $mess)) {
                die('Không tìm thấy cơ sở dữ liệu');
            }
        }
    }
    public static function getInstance($config)
    {
        if (self::$instance === null) {
            $connection = new Connection($config);
            self::$instance = self::$conn;
        }
        return self::$instance;
    }
}
