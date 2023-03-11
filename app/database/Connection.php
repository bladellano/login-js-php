<?php

namespace app\database;

use PDO;

class Connection
{
    private static $connect = null;

    public static function getConnection()
    {
        if (!self::$connect) {
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);  
            self::$connect = new PDO("mysql:host={$_ENV['DATABASE_HOST']};dbname={$_ENV['DATABASE_NAME']}",$_ENV['DATABASE_USER'],$_ENV['DATABASE_PASSWORD'],$options);
        }
        return self::$connect;
    }
}
