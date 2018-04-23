<?php

include_once 'model/socioModel.php';

class SocioMantenimientoController {

    private $modelSocio;

    public function __CONSTRUCT() {
        $this->modelSocio = new Socio();
    }

    public function Index() {
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Socio/SocioMantenimiento.php';
        require_once 'view/Footer.php';
    }

    public function Eliminar() {
        $this->modelSocio->Eliminar($_REQUEST['cedula']);
        header('Location: index.php');
    }

    public function Editar() {
        $alm = new Socio();

        if (isset($_REQUEST['cedula'])) {
            $alm = $this->modelSocio->Obtener($_REQUEST['cedula']);
            require_once 'view/HeaderMantenimiento.php';
            require_once 'view/administrador/Socio/Socio-editar.php';
            require_once 'view/Footer.php';
        } else {
            echo '<script>alert("Debe seleccionar un Socio")</script>';
            echo '<script>location.href="?cSocio&a=Index"</script>';
        }
    }

    public function Registrar() {
        $alm = new Socio();

        if (isset($_REQUEST['cedula'])) {
            $alm = $this->modelSocio->Obtener($_REQUEST['cedula']);
        }

        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Socio/Socio-registrar.php';
        require_once 'view/Footer.php';
    }

    public function Guardar() {
        $alm = new Socio();

        $alm->cedula = $_REQUEST['cedula'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->primerApellido = $_REQUEST['primerApellido'];
        $alm->segundoApellido = $_REQUEST['segundoApellido'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->correo = $_REQUEST['correo'];
        $alm->direccion = $_REQUEST['direccion'];

        $this->modelSocio->Obtener($_REQUEST['cedula']) ?
                        $this->modelSocio->Actualizar($alm) :
                        $this->modelSocio->Registrar($alm);

        header('Location: index.php');
    }


}
