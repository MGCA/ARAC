<?php

class Recibo {

    private $pdo;
    public $numRecibo;
    public $cobra;
    public $numPrevista;
    public $mes;
    public $fechaPago;
    public $fechaVencimiento;
    public $estado;
    public $monto;
    

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
            $sql = "UPDATE recibo SET cobra = ?, fechaPago = ?, estado = ?, monto = ? WHERE numPrevista = ? and mes = ?";
               
            $this->pdo->prepare($sql)
                    ->execute(array($data->cobra, $data->fechaPago, $data->estado, $data->monto, $data->numPrevista, $data->mes)                           
            );
            echo'<script>alert("Transaccion Compleatada")</script>';
        } catch (Exception $exc) {
            echo'<script>alert("Empleado incorrecto")</script>';
            
        }
    }

    public function Guardar(Recibo $data) {
        try {
            $sql = "INSERT INTO recibo (numRecibo,cobra,numPrevista,mes,fechaPago,fechavencimiento,estado,monto)
                        VALUE (?,?,?,?,?,?,?,?)";
//Aqui llamamos todas las previstas y creamos un mes pendiente a cancelar
            foreach ($this->cargarPrevistas() as $a) {
                $data->numPrevista = $a->numPrevista;
              $this->pdo->prepare($sql)
                    ->execute(array($data->numRecibo, $data->cobra, $data->numPrevista, $data->mes, $data->fechaPago, $data->fechaVencimiento, $data->estado, $data->monto)
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
