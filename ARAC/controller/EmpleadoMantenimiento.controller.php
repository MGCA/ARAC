<?php 

require_once 'model/EmpleadoModel.php';

class EmpleadoMantenimientoController {

    private $modelEmpleado;

    public function __CONSTRUCT() {
        $this->modelEmpleado = new Empleado();
    }

    public function Index() {
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Empleado/EmpleadoMantenimiento.php';
        require_once 'view/Footer.php';
    }
    
    public function Editar(){
        $alm = new Empleado();
        
        if(isset($_REQUEST['cedula'])){
            $alm = $this->modelEmpleado->Obtener($_REQUEST['cedula']);
            require_once 'view/HeaderMantenimiento.php';
            require_once 'view/administrador/Empleado/Empleado-editar.php';
            require_once 'view/Footer.php';
        }
        else {
            echo '<script>alert("Debe seleccionar un Empleado")</script>';
            echo '<script>location.href="?c=EmpleadoMantenimiento&a=Index"</script>';
        }
    }
    
    public function Registrar(){
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Empleado/Empleado-registrar.php';
        require_once 'view/Footer.php';
    }
    
    public function Guardar(){
        $alm = new Empleado();
        
        $alm->cedula = $_REQUEST['cedula'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->primerApellido = $_REQUEST['primerApellido'];
        $alm->segundoApellido = $_REQUEST['segundoApellido'];
        $alm->direccion = $_REQUEST['direccion']; 
        $alm->telefono = $_REQUEST['telefono']; 
        $alm->puesto = $_REQUEST['puesto']; 
        $this->modelEmpleado->Obtener($_REQUEST['cedula'])?
                         $this->modelEmpleado->Actualizar($alm):
                         $this->modelEmpleado->Registrar($alm);
              
        header('Location: ?c=EmpleadoMantenimiento&a=Index');
    }
    
    public function Eliminar() {
        if (isset($_REQUEST['cedula'])) {
            $this->modelEmpleado->Eliminar($_REQUEST['cedula']);
            header('Location: ?c=EmpleadoMantenimiento&a=Index');
        } else {
            echo '<script>alert("Debe seleccionar un Empleado")</script>';
            echo '<script>location.href="?c=EmpleadoMantenimiento&a=Index"</script>';
        }
    }

}
