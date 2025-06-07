<?php
require 'config.php';

function connect($host, $db, $username, $password)
{

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
return connect($host, $db, $username, $password);
