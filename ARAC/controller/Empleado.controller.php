<?php

class EmpleadoMantenimientoController {

    private $modelEmpleado;

    public function __CONSTRUCT() {
        $this->modelEmpleado = new Empleado();
    }

    public function Index() {
        
    }
    
    public function Editar(){
        $alm = new Empleado();
        
        if(isset($_REQUEST['cedula'])){
            $alm = $this->modelEmpleado->Obtener($_REQUEST['cedula']);
            require_once 'view/HeaderMantenimiento.php';
            require_once 'view/administrador/Empleado/empleado-editar.php';
        }
        else {
            echo '<script>alert("Debe seleccionar un Empleado")</script>';
            echo '<script>location.href="?cEmpleado&a=Index"</script>';
        }
    }
    
    public function Registrar(){
        $alm = new Empleado();
        
        if(isset($_REQUEST['cedula'])){
            $alm = $this->modelEmpleado->Obtener($_REQUEST['cedula']);
        }
        
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Empleado/producto-editar.php';
    }
    
    public function Guardar(){
        $alm = new Empleado();
        
        $alm->cedula = $_REQUEST['cedula'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->primerApellido = $_REQUEST['primerApellido'];
        $alm->segundoApellido = $_REQUEST['segundoApellido'];
        $alm->telefono = $_REQUEST['telefono']; 
        $alm->puesto = $_REQUEST['puesto']; 
        $this->modelEmpleado->Obtener($_REQUEST['cedula'])?
                         $this->modelEmpleado->Actualizar($alm):
                         $this->modelEmpleado->Registrar($alm);
              
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->modelProd->Eliminar($_REQUEST['idProducto']);
        header('Location: index.php');
    }

}
