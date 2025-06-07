<?php

require 'config.php';

class Connection
{

    public static function make($host, $db, $username, $password)
    {

        try {
            $dsn = "mysql:host=$host;db_name=$db;charset=UTF8";
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $pdo = new PDO($dsn, $username, $password, $options);
            return $pdo;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}


return Connection::make($host, $db, $username, $password);