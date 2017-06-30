<?php

namespace database;

class DatabaseConnection {

    private static $user = 'root';
    private static $password = 'root';
    private static $dsn = 'mysql:host=localhost;dbname=Trabalho_pos_2017';
    private static $options = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    private static $dbh = null;

    private function __construct() {
        
    }

    public static function getConnection() {
        if (!isset(self::$dbh)) {
            self::$dbh = new \PDO(self::$dsn, self::$user, self::$password, self::$options);
        }
        return self::$dbh;
    }

}
