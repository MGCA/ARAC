<?php

include_once 'model/reciboModel.php';
include_once 'model/previstaModel.php';

class ReciboController {

    private $modelRecibo;
    private $modelPrevista;

    public function __CONSTRUCT() {
        $this->modelPrevista = new Prevista();
        $this->modelRecibo = new Recibo();
    }

    public function Index() {
        require_once 'view/Header.php';
        require_once 'view/presentacion/Recibo.php';
        require_once 'view/Footer.php';
    }

    public function Mantenimiento() {
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Recibo/ReciboMantenimiento.php';
        require_once 'view/Footer.php';
    }

    public function Generar() {

        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Recibo/Recibo-mensual.php';
        require_once 'view/Footer.php';
    }

    public function Consultar() {

        $alm = new Recibo();
        $alm = $this->modelRecibo->Obtener($_REQUEST['numPrevista'], $_REQUEST['mes']);
        if ($alm && $alm->estado == '0') {
            require_once 'view/HeaderMantenimiento.php';
            require_once 'view/administrador/Recibo/Recibo-Consultar.php';
            require_once 'view/Footer.php';
        } else {
            echo '<script>alert("El recibo ya ha sido pagado o numero de prevista es incorrecto")</script>';
            $this->Index();
        }
        
    }

    public function Eliminar() {
        $this->modelRecibo->Eliminar($_REQUEST['numRecibo']);
        header('Location: index.php');
    }

    public function Actualizar() {
        $alm = new Recibo();

        $alm->numPrevista = $_REQUEST['numPrevista'];
        $alm->mes = $_REQUEST['mes'];
        $alm->cobra = $_REQUEST['cobra'];
        $alm->fecha = $_REQUEST['fecha'];
        $alm->estado = $_REQUEST['estado'];

        $this->modelRecibo->Registrar($alm);
        $this->Index();
    }

    public function Guardar() {
        $alm = new Recibo();

        $alm->fechaVencimiento = $_REQUEST['fechaVencimiento'];
        $alm->estado = $_REQUEST['estado'];
        $alm->mes = $_REQUEST['mes'];
        $this->modelRecibo->Guardar($alm);

        header('Location: index.php');
    }

}
