<?php

require_once 'model/compraModel.php';

class CompraMantenimientoController
{        
     private $modelCompra;

    public function __CONSTRUCT() {
        $this->modelCompra = new Compra();
    }

    public function Index()
    {
        require_once 'view/Header.php';
        require_once 'view/administrador/Compra/CompraMantenimiento.php';
        require_once 'view/Footer.php';
    }
    
    public function Mantenimiento()
    {
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Compra/CompraMantenimiento.php';
        require_once 'view/Footer.php';
    }

    
    public function Editar() {
        $compra = new Compra();

        if (isset($_REQUEST['numCompra'])) {
            $compra = $this->modelCompra->Obtener($_REQUEST['numCompra']);
            require_once 'view/HeaderMantenimiento.php';
            require_once 'view/administrador/Compra/Compra-editar.php';
            require_once 'view/Footer.php';
        } else {
            echo '<script>alert("Debe seleccionar una Compra")</script>';
            echo '<script>location.href="?c=CompraMantenimiento&a=Index"</script>';
        }
    }
    
    public function Registrar(){
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Compra/Compra-registrar.php';
        require_once 'view/Footer.php';
    }
    
    public function Guardar(){
        $alm = new Compra();
        //   numCompra-encargadoCompra-nombreNegocio-motivoCompra-lugarCompra-fechaCompra-montoTotalCompra;
        
        $alm->numCompra = $_REQUEST['numCompra'];
        $alm->encargadoCompra = $_REQUEST['encargadoCompra'];
        $alm->nombreNegocio = $_REQUEST['nombreNegocio'];
        $alm->motivoCompra = $_REQUEST['motivoCompra'];
        $alm->lugarCompra = $_REQUEST['lugarCompra']; 
        $alm->fechaCompra = $_REQUEST['fechaCompra']; 
        $alm->montoTotalCompra = $_REQUEST['montoTotalCompra'];
        $this->modelCompra->Obtener($_REQUEST['numCompra'])?
                         $this->modelCompra->Actualizar($alm):
                         $this->modelCompra->Registrar($alm);
              
        header('Location: ?c=CompraMantenimiento&a=Index');
    }
    
    public function Eliminar() {

        if (isset($_REQUEST['numCompra'])) {
            $this->modelCompra->Eliminar($_REQUEST['numCompra']);
            header('Location: ?c=CompraMantenimiento&a=Index');
        } else {
            echo '<script>alert("Debe seleccionar una Compra")</script>';
            echo '<script>location.href="?c=CompraMantenimiento&a=Index"</script>';
        }
    }

}
