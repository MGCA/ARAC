<?php

class Compra{
    
    private $pdo;
    public $numCompra;
    public $encargadoCompra;
    public $nombreNegocio;
    public $motivoCompra;
    public $lugarCompra;
    public $montoTotalCompra;
    public $fecha;
    
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
    
}
