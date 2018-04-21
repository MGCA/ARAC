<?php

class Recibo {

    private $pdo;
    public $numRecibo;
    public $cobra;
    public $fecha;
    public $numPrevista;
    public $estado;

    function __construct() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Listar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM recibo");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $stm = $this->pdo
                    ->prepare("SELECT * FROM recibo WHERE numRecibo = ?");
            $stm->execute(array($id));
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Registrar(Socio $data) {
        $sql = "INSERT INTO socio (cedula,nombre,primerApellido,segundoApellido,telefono,correo,direccion)"
                . "VALUE (?,?,?,?,?,?,?)";
        $this->pdo->prepare($sql)
                ->execute(array($data->cedula, $data->nombre, $data->primerApellido, $data->segundoApellido, $data->telefono, $data->correo, $data->direccion)
        );
    }

    public function Actualizar($data) {
        try {
            $sql = "UPDATE socio SET cedula = ? ,nombre = ? ,primerApellido = ? ,segundoApellido = ? ,telefono = ? ,correo = ? ,direccion = ?";
            
            $this->pdo->prepare($sql)
                    ->execute(array($data->cedula, $data->nombre, $data->primerApellido, $data->segundoApellido, $data->telefono, $data->correo, $data->direccion)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

}
