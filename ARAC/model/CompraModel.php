<?php

class Compra{
    
    private $pdo;
    public $numCompra;
    public $encargadoCompra;
    public $nombreNegocio;
    public $motivoCompra;
    public $lugarCompra;
    public $fechaCompra;
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
            $sql = "INSERT INTO compra (numCompra, encargadoCompra, nombreNegocio, motivoCompra, lugarCompra, montoTotalCompra, fechaCompra)
                        VALUE (?,?,?,?,?,?,?)";

            $this->pdo->prepare($sql)
                    ->execute(array($data->numCompra,$data->encargadoCompra, $data->nombreNegocio, $data->motivoCompra, $data->lugarCompra, $data->montoTotalCompra, $data->fechaCompra)
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
            $sql = "UPDATE compra SET encargadoCompra = ?, nombreNegocio = ?, motivoCompra = ?, lugarCompra = ?, montoTotalCompra = ?, fechaCompra = ? WHERE numCompra = ?";
            
            $this->pdo->prepare($sql)
                    ->execute(array($data->encargadoCompra, $data->nombreNegocio, $data->motivoCompra, $data->lugarCompra, $data->montoTotalCompra, $data->fecha, $data->numCompra)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

}
