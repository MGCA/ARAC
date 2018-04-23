<?php

Class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost:3309;dbname=arac;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}