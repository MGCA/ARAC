<?php
require_once 'model/compraModel.php';
//require_once 'entidades/Database';

class comprasController
{        
     private $modelCompra;

    public function __CONSTRUCT() {
        $this->modelCompra = new Compra();
    }

    public function Index()
    {
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Compras/compras.php';
        require_once 'view/Footer.php';
    }

    
//    public function Editar(){
//        $alm = new Compra();
//        
//        if(isset($_REQUEST['numCompra'])){
//            $alm = $this->modelEmpleado->Obtener($_REQUEST['numCompra']);
//            require_once 'view/HeaderMantenimiento.php';
//            require_once 'view/administrador/Compras/compras-editar.php';
//        }
//        else {
//            echo '<script>alert("Debe seleccionar una Compra")</script>';
//            echo '<script>location.href="?cEmpleado&a=Index"</script>';
//        }
//    }
    
//    public function Registrar(){
//        $alm = new Compra();
//        
//        if(isset($_REQUEST['cedula'])){
//            $alm = $this->modelEmpleado->Obtener($_REQUEST['cedula']);
//        }
//        
//        require_once 'view/HeaderMantenimiento.php';
//        require_once 'view/administrador/Compras/compras-editar.php';
//    }
//    
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
              
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->modelCompra->Eliminar($_REQUEST['numCompra']);
        header('Location: index.php');
    }

}