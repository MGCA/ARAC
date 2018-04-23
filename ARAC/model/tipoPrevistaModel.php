<?php

class TipoPrevista {

    private $pdo;
    public $idTipo;
    public $tarifaMes;
    public $tipoPrevista;

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

            $stm = $this->pdo->prepare("SELECT * FROM tipoprevista");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $stm = $this->pdo
                    ->prepare("SELECT * FROM tipoprevista WHERE idTipo = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    public function Registrar(TipoPrevista $data) {
        try {
            $sql = "INSERT INTO tipoprevista (idTipo,tarifaMes,tipoPrevista)"
                    . "VALUE (?,?,?)";
            $this->pdo->prepare($sql)
                    ->execute(array($data->idTipo, $data->tarifaMes, $data->tipoPrevista)
            );
        } catch (Exception $exc) {
            die ($exc->getMessage());
        }
    }

}
