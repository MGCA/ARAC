<?php

Class Database
{
    //Comentario de prueba
    public static function StartUp(){
        $hostname = "localhost";
        $dbname = "arac";
        $username = "root";
        $pwd = "";
        
        try {
            $pdo = new PDO("mysql:Mariadb=" . $hostname . ';Database=' . $dbname, $username, $pwd);
        } catch (PDOException $exc) {
            $exc->getMessage();
            echo 'Fallo la Conexion';
            die("Error" . $exc->getMessage());
        }
        return $pdo;
        }
        
        // CONEXION A LA BASE DE DATOS CON PARAMETROS///////////////////////////////
    public static function StartUpUser($user, $password) 
    {
        $hostname = "127.0.0.1:3309";
//        $hostname = "localhost";
        $dbname = "arac";
        
        try
        {
            $pdo = new PDO("mysql:Mariadb=" . $hostname . ';Database=' . $dbname, $user, $password);
        }
        catch(PDOException $e)
        {
            $e->getMessage();
            echo 'Fallo la conexion';
            die("Error" . $e->getMessage());
        }
        return $pdo;
    }
}