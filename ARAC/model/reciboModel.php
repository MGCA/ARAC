<?php

class Recibo {

    private $pdo;
    public $numRecibo;
    public $cobra;
    public $numPrevista;
    public $medidor;
    public $mes;
    public $fecha;
    public $fechaVencimiento;
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

    public function Obtener($numPrevista,$mes) {
        try {
            $stm = $this->pdo
                    ->prepare("SELECT * FROM recibo WHERE numPrevista = ? and mes = ?");
            $stm->execute(array($numPrevista,$mes));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }
    
    
    
    
    
//Metodo que carga los numeros de prevista en el cual lo usaremos despues para hacer el registro para cada mes de recibos
    public function cargarPrevistas() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT numPrevista FROM prevista");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Registrar($data) {
        try {
            $sql = "UPDATE recibo SET cobra = ?, fecha = ?, estado = ? WHERE numPrevista = ? and mes = ?";
            
            $this->pdo->prepare($sql)
                    ->execute(array($data->cobra, $data->fecha, $data->estado, $data->numPrevista, $data->mes)
            );
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Guardar(Recibo $data) {
        try {
            $sql = "INSERT INTO recibo (numRecibo,cobra,numPrevista,medidor,mes,fecha,fechavencimiento,estado)
                        VALUE (?,?,?,?,?,?,?,?)";
//Aqui llamamos todas las previstas y creamos un mes pendiente a cancelar
            foreach ($this->cargarPrevistas() as $a) {
                $data->numPrevista = $data->medidor = $a->numPrevista;
              $this->pdo->prepare($sql)
                    ->execute(array($data->numRecibo, $data->cobra, $data->numPrevista, $data->medidor, $data->mes, $data->fecha, $data->fechaVencimiento, $data->estado)
            );  
            }
            
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
