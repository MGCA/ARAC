<?php

require_once 'model/UsuarioModel.php';

class UsuarioMantenimientoController {
    
    private $modelUsuario;
    
    public function __CONSTRUCT() {
        $this->modelUsuario = new Usuario();
    }

    public function Index() {
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Usuario/UsuarioMantenimiento.php';
        require_once 'view/Footer.php';
    }
    
    public function Guardar(){
        $alm = new Usuario();

        $alm->numUsuario = $_REQUEST['numUsuario'];
        $alm->nombreUsuario = $_REQUEST['nombreUsuario'];
        $alm->password = $_REQUEST['password'];
        $alm->empleado = $_REQUEST['empleado'];
        $this->modelUsuario->Obtener($_REQUEST['numUsuario']) ?
                        $this->modelUsuario->Actualizar($alm) :
                        $this->modelUsuario->Registrar($alm);

        header('Location: ?c=UsuarioMantenimiento&a=Index');
    }
    
    public function Registrar(){
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Usuario/Usuario-registrar.php';
        require_once 'view/Footer.php';
    }
    
    public function Editar(){
        $alm = new Usuario();
        
        if(isset($_REQUEST['numUsuario'])){
            $alm = $this->modelUsuario->Obtener($_REQUEST['numUsuario']);
            require_once 'view/HeaderMantenimiento.php';
            require_once 'view/administrador/Usuario/Usuario-editar.php';
            require_once 'view/Footer.php';
        }
        else {
            echo '<script>alert("Debe seleccionar un Usuario")</script>';
            echo '<script>location.href="?c=UsuarioMantenimiento&a=Index"</script>';
        }
    }
    
    public function Eliminar() {
        if (isset($_REQUEST['numUsuario'])) {
            $this->modelUsuario->Eliminar($_REQUEST['numUsuario']);
            header('Location: ?c=UsuarioMantenimiento&a=Index');
        } else {
            echo '<script>alert("Debe seleccionar un Usuario")</script>';
            echo '<script>location.href="?c=UsuarioMantenimiento&a=Index"</script>';
        }
    }

}
