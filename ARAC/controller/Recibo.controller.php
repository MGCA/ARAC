<?php

include_once 'model/reciboModel.php';
include_once 'model/previstaModel.php';

class ReciboController {

    //variables para elaxar y hacer uso del model Recibo y y Prevista
    private $modelRecibo;
    private $modelPrevista;

    public function __CONSTRUCT() {

        //Coneccion con el modelo de la BD
        $this->modelPrevista = new Prevista();
        $this->modelRecibo = new Recibo();
    }

    public function Index() {
        //Pantalla de pagos de Recibo 
        require_once 'view/Header.php';
        require_once 'view/presentacion/Recibo.php';
        require_once 'view/Footer.php';
    }

    public function Mantenimiento() {
        //Pantalla para realizar un pago de un recibo sin pagar
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Recibo/ReciboMantenimiento.php';
        require_once 'view/Footer.php';
    }

    public function Generar() {
        //Pantalla para el de mantenimiento. Crea recibo de meses
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Recibo/Recibo-mensual.php';
        require_once 'view/Footer.php';
    }

    public function Consultar() {

        //Realiza consulta de Recibos creados sin pagar
        $alm = new Recibo();
        $alm = $this->modelRecibo->Obtener($_REQUEST['numPrevista'], $_REQUEST['mes']); // envia el mes y el numero de prevista
        if ($alm && $alm->estado == '0') {                                             //para la comprobacion de su deuda
            require_once 'view/Header.php';
            require_once 'view/administrador/Recibo/Recibo-Consultar.php';
            require_once 'view/Footer.php';
        } else {
            echo '<script>alert("El recibo ya ha sido pagado o numero de prevista es incorrecto")</script>';
            $this->Index();
        }
    }

    public function Eliminar() {
        //llama a la funcion de eliminar del
        $this->modelRecibo->Eliminar($_REQUEST['numRecibo']);
        header('Location: index.php');
    }

    public function Actualizar() {
        $alm = new Recibo();

        $alm->numPrevista = $_REQUEST['numPrevista'];
        $alm->mes = $_REQUEST['mes'];
        $alm->cobra = $_REQUEST['cobra'];
        $alm->fechaPago = $_REQUEST['fechaPago'];
        $alm->estado = $_REQUEST['estado'];
        $alm->monto = $_REQUEST['monto'];


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
