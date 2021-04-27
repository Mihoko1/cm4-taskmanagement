<?php
// namespace TaskManagement\Model;

class Database
{
    // //properties
    // private static $user = 'root';
    // private static $pass = '';
    // private static $dsn = 'mysql:host=localhost;dbname=task_management';

    // private static $dbcon;

    // private function __construct()
    // {
    // }
    
    private static $user = 'bfaca630ffd158';
    private static $pass = '2df07728ed2e994';
    private static $dsn = 'mysql:host=us-cdbr-east-03.cleardb.com;dbname=heroku_96a828e3e46c53e;charset=utf8';
    
    private static $dbcon;

    private function __construct()
    {
    }

    //get pdo connection
    public static function getDb(){
        if(!isset(self::$dbcon)) {
            try {
                self::$dbcon = new \PDO(self::$dsn, self::$user, self::$pass);
                self::$dbcon->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$dbcon->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            } catch (\PDOException $e) {
                $msg = $e->getMessage();
                // include '../custom-error.php';
                exit();
            }
        }

        return self::$dbcon;
    }
}
