<?php

include_once 'model/socioModel.php';

class SocioMantenimientoController{
    private $modelSocio;
    
    public function __CONSTRUCT(){
        $this->modelSocio = new Socio();
    }
    
    public function Index()
    {
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Socio/SocioMantenimiento.php';
    }
    public function Eliminar(){
        $this->modelSocio->Eliminar($_REQUEST['cedula']);
        header('Location: index.php');
    }
}

