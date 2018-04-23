<?php
include_once 'model/reciboModel.php';
class ReciboController
{        
    private $modelRecibo;

    public function __CONSTRUCT() {
        $this->modelRecibo = new Recibo();
    }
    
    public function Index()
    {
        require_once 'view/Header.php';
        require_once 'view/presentacion/Recibo.php';
        require_once 'view/Footer.php';
    }
    
    public function Consultar()
    {
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Recibo/ReciboMantenimiento.php';
        require_once 'view/Footer.php';
    }
    
    public function Eliminar() {
        $this->modelRecibo->Eliminar($_REQUEST['numRecibo']);
        header('Location: index.php');
    }

    public function Guardar() {
        $alm = new Recibo();

        $alm->numRecibo = $_REQUEST['numRecibo'];
        $alm->cobra = $_REQUEST['cobra'];
        $alm->fecha = $_REQUEST['fecha'];
        $alm->numPrevista = $_REQUEST['numPrevista'];
        $alm->estado = $_REQUEST['estado'];
        $alm->mes = $_REQUEST['mes'];
        
        $this->modelRecibo->Obtener($_REQUEST['numRecibo']) ?
                        $this->modelRecibo->Actualizar($alm) :
                        $this->modelRecibo->Registrar($alm);

        header('Location: index.php');
    }
}
