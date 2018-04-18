<?php

class HomeController
{        
    public function Index()
    {
        require_once 'view/Header.php';
        require_once 'view/presentacion/Inicio.php';
        require_once 'view/Footer.php';
    }
}