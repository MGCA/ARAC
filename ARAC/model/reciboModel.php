<?php

class Recibo {

    private $pdo;
    public $numRecibo;
    public $cobra;
    public $fecha;
    public $numPrevista;
    public $estado;
    public $mes;

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

            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Registrar(Recibo $data) {

        $sql = "INSERT INTO recibo (numRecibo,cobra,fecha,numPrevista,estado, mes)
                VALUE (?,?,?,?,?,?)";
        $this->pdo->prepare($sql)
                ->execute(array($data->numRecibo, $data->cobra, $data->fecha, $data->numPrevista, $data->estado, $data->mes)
        );
    }

    public function Guardar(Socio $data) {
        try {
            $sql = "INSERT INTO recibo (numRecibo,cobra,fecha,numPrevista,estado,mes)
                        VALUE (?,?,?,?,?,?)";

            $this->pdo->prepare($sql)
                    ->execute(array($data->numRecibo, $data->cobra, $data->fecha, $data->numPrevista, $data->estado, $data->mes)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Actualizar($data) {
        try {
            $sql = "UPDATE recibo SET cobra = ? ,fecha = ? ,numPrevista = ? ,estado = ? ,mes = ? WHERE numRecibo = ?";

            $this->pdo->prepare($sql)
                    ->execute(array($data->cobra, $data->fecha, $data->numPrevista, $data->estado, $data->numRecibo, $data->mes)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }
    
    public function Eliminar($id) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM recibo WHERE numRecibo = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
