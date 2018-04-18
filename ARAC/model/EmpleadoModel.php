<?php

class Empleado {

    private $pdo;
    public $cedula;
    public $nombre;
    public $primerApellido;
    public $segundoApellido;
    public $direccion;
    public $telefono;
    public $puesto;

    public function __construct() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }
    
    public function Listar(){
        try {
            $result = array();
            
            $stm = $this->pdo->prepare("SELECT * FROM empleado");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die ($exc->getMessage());
        }
        }

}
