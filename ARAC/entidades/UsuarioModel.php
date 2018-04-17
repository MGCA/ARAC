<?php

class Usuario{
    
    private $numUsuario;
    private $nombreUsuario;
    private $password;
    private $empleado;
    
    public function __construct($numUsuario, $nombreUsuario, $password, $empleado) {
        $this->numUsuario = $numUsuario;
        $this->nombreUsuario = $nombreUsuario;
        $this->password = $password;
        $this->empleado = $empleado;
    }
    
    public function getNumUsuario() {
        return $this->numUsuario;
    }

    public function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmpleado() {
        return $this->empleado;
    }

    public function setNumUsuario($numUsuario) {
        $this->numUsuario = $numUsuario;
    }

    public function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmpleado($empleado) {
        $this->empleado = $empleado;
    }


    
}