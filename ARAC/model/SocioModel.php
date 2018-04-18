<?php

class Socio {

    private $pdo;
    public $cedula;
    public $nombre;
    public $primerApellido;
    public $segundoApellido;
    public $telefono;
    public $correo;
    public $direccion;

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
            $stm = $this->pdo->prepare("SELECT * FROM socio");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM socio WHERE cedula = ?");
            $stm->execute(array($id));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Registrar(Socio $data) {
        try {
            $sql = "INSERT INTO socio (cedula,nombre,primerApellido,segundoApellido,telefono,correo,direccion)"
                    . "VALUE ()";
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
