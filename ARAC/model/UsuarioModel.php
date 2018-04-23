<?php

class Usuario {

    private $pdo;
    
    public $numUsuario;
    public $nombreUsuario;
    public $password;
    public $empleado;

    public function __construct() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }
    
    public function Listar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM usuario");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }
    
    public function Registrar($data) {
        try {
            $sql = "INSERT INTO usuario (nombreUsuario,password,empleado)
                    VALUE (?,?,?)";
            $this->pdo->prepare($sql)
                    ->execute(array($data->nombreUsuario, $data->password, $data->empleado)
            );
        } catch (Exception $exc) {
            die ($exc->getMessage());
        }
    }
    
    public function Obtener($id) {
        try {
            $stm = $this->pdo->prepare("SELECT *FROM usuario WHERE numUsuario = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }
    
    public function Actualizar($data) {
        try {
            $sql = "UPDATE usuario SET nombreUsuario = ? ,password = ? ,empleado = ? WHERE numUsuario = ?";
            
            $this->pdo->prepare($sql)
                    ->execute(array($data->nombreUsuario, $data->password, $data->empleado, $data->numUsuario)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }
    
    public function Eliminar($id) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM usuario WHERE numUsuario = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}