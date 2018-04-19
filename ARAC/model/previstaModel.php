<?php

class Prevista {

    private $pdo;
    public $numPrevista;
    public $ubicacion;
    public $tipoPrevista;
    public $dueño;

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

            $stm = $this->pdo->prepare("SELECT * FROM prevista");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM prevista WHERE numPrevista = ?");
            $stm->execute(array($id));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Registrar(Prevista $data) {
        try {
            $sql = "INSERT INTO prevista (numPrevista,ubicacion,tipoPrevista,dueño)"
                    . "VALUE (?,?,?,?)";
            $this->pdo->prepare($sql)
                    ->execute(array($data->numPrevista, $data->ubicacion, $data->tipoPrevista, $data->dueño)
            );
        } catch (Exception $exc) {
            die ($exc->getMessage());
        }
    }

}
