<?php
// namespace TaskManagement\Model;

class Database
{

    //properties
    // private static $user = 'root';
    // private static $pass = 'root';
    // private static $dsn = 'mysql:host=localhost;dbname=task_management';
    // private static $dbcon;
    //mysql://bfaca630ffd158:b64928b4@us-cdbr-east-03.cleardb.com/heroku_96a828e3e46c53e?reconnect=true
    private static $user = 'bfaca630ffd158';
    private static $pass = 'b64928b4';
    private static $dsn = 'mysql:host=us-cdbr-east-03.cleardb.com;dbname=heroku_96a828e3e46c53e;charset=utf8';
  

    //properties
    // private static $user = 'root';
    // private static $pass = 'root';
    // private static $dsn = 'mysql:host=localhost;dbname=task_management';
    
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
