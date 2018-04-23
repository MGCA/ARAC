<?php
require_once 'model/CompraModel.php';
class CompraController
{        
    private $modelCompra;
    public function Index()
    {
        require_once 'view/Header.php';
        require_once 'view/presentacion/Compra.php';
        require_once 'view/Footer.php';
    }
}
