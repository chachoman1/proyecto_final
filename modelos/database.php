<?php
class DataBase
{
    public static function connection()
    {
        $hostname = "davinci-desings.mysql.database.azure.com";
        $port = "3306";
        $database = "telas";
        $username = "abc";
        $password = "Chachoman1992.";
        $options = array(
            PDO::MYSQL_ATTR_SSL_CA => 'assets/coneccion.pem'
        );
        $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
