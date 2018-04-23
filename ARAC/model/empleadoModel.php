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

    public function Listar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM empleado");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $stm = $this->pdo->prepare("SELECT *FROM empleado WHERE cedula = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Registrar(Empleado $data) {
        try {
            $sql = "INSERT INTO empleado (cedula,nombre,primerApellido,segundoApellido,direccion,telefono,puesto)
                    VALUE (?,?,?,?,?,?,?)";
            $this->pdo->prepare($sql)
                    ->execute(array($data->cedula, $data->nombre, $data->primerApellido, $data->segundoApellido, $data->direccion, $data->telefono, $data->puesto)
            );
        } catch (Exception $exc) {
            die ($exc->getMessage());
        }
    }
    
    public function Eliminar($id) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM socio WHERE cedula = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Actualizar($data) {
        try {
            $sql = "UPDATE empleado SET cedula = ? ,nombre = ? ,primerApellido = ? ,segundoApellido = ? ,telefono = ? ,puesto = ?";
            
            $this->pdo->prepare($sql)
                    ->execute(array($data->cedula, $data->nombre, $data->primerApellido, $data->segundoApellido, $data->telefono, $data->puesto)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

}
