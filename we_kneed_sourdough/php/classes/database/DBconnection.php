<?php
class DBConnection{
    protected static $db;
    private function __construct() {
        try {
            $host = "localhost";
            $user = "root";
            $password = "";
            $db_name = 'wksd';
        self::$db = new mysqli($host, $user, $password, $db_name);
        }
        catch (Exception $e) {
            echo $e;
        }
    }

    public static function getInstance() {
        if (!self::$db) {
            new DBConnection();
        }
        return self::$db;
    }

    public function __destruct() {
        $db=NULL;
    }
}
?>