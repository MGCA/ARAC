<?php

class Compra{
    
    private $pdo;
    public $numCompra;
    public $encargadoCompra;
    public $nombreNegocio;
    public $motivoCompra;
    public $lugarCompra;
    public $fecha;
    public $montoTotalCompra;
    
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

            $stm = $this->pdo->prepare("SELECT * FROM compra");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Obtener($id) {
        try {
            $stm = $this->pdo
                    ->prepare("SELECT * FROM compra WHERE numCompra = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
     public function Registrar($data) {
        try {
            $sql = "INSERT INTO compra (encargadoCompra, nombreNegocio, motivoCompra, lugarCompra, fecha, montoTotalCompra)
                        VALUE (?,?,?,?,?,?)";

            $this->pdo->prepare($sql)
                    ->execute(array($data->encargadoCompra, $data->nombreNegocio, $data->motivoCompra, $data->lugarCompra, $data->fecha, $data->montoTotalCompra)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }
    
    public function Eliminar($id) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM compra WHERE numCompra = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Actualizar($data) {
        try {
            $sql = "UPDATE compra SET encargadoCompra = ?, nombreNegocio = ?, motivoCompra = ?, lugarCompra = ?, fecha = ?, montoTotalCompra = ? WHERE numCompra = ?";
            
            $this->pdo->prepare($sql)
                    ->execute(array($data->encargadoCompra, $data->nombreNegocio, $data->motivoCompra, $data->lugarCompra, $data->fecha, $data->montoTotalCompra, $data->numCompra)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

}
