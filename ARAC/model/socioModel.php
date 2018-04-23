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
            $stm = $this->pdo
                    ->prepare("SELECT * FROM socio WHERE cedula = ?");

            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Registrar(Socio $data) {
        try {
            $sql = "INSERT INTO socio (cedula,nombre,primerApellido,segundoApellido,telefono,correo,direccion)
                        VALUE (?,?,?,?,?,?,?)";

            $this->pdo->prepare($sql)
                    ->execute(array($data->cedula, $data->nombre, $data->primerApellido, $data->segundoApellido, $data->telefono, $data->correo, $data->direccion)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Guardar(Socio $data) {
        try {
            $sql = "INSERT INTO socio (cedula,nombre,primerApellido,segundoApellido,telefono,correo,direccion)
                        VALUE (?,?,?,?,?,?,?)";

            $this->pdo->prepare($sql)
                    ->execute(array($data->cedula, $data->nombre, $data->primerApellido, $data->segundoApellido, $data->telefono, $data->correo, $data->direccion)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
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
            $sql = "UPDATE socio SET nombre = ?, primerApellido = ?, segundoApellido = ?, telefono = ?, correo = ?, direccion = ? WHERE cedula = ?";
            
            $this->pdo->prepare($sql)
                    ->execute(array($data->nombre, $data->primerApellido, $data->segundoApellido, $data->telefono, $data->correo, $data->direccion, $data->cedula)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

}
