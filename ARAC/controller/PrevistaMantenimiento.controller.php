<?php

include_once 'model/previstaModel.php';

class PrevistaMantenimientoController {

    private $modelPrevista;

    public function __CONSTRUCT() {
        $this->modelPrevista = new Prevista();
    }

    public function Index() {
        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Socio/Prevista/PrevistaMantenimiento.php';
        require_once 'view/Footer.php';
    }

    public function Eliminar() {
        $this->modelPrevista->Eliminar($_REQUEST['numPrevista']);
        header('Location: index.php');
    }

    public function Editar() {
        $alm = new Prevista();

        if (isset($_REQUEST['numPrevista'])) {
            $alm = $this->modelPrevista->Obtener($_REQUEST['numPrevista']);
            require_once 'view/HeaderMantenimiento.php';
            require_once 'view/administrador/Socio/Prevista/Prevista-editar.php';
            require_once 'view/Footer.php';
        } else {
            echo '<script>alert("Debe seleccionar una Prevista")</script>';
            echo '<script>location.href="?cPrevista&a=Index"</script>';
        }
    }

    public function Registrar() {
        $alm = new Prevista();

        if (isset($_REQUEST['numPrevista'])) {
            $alm = $this->modelPrevista->Obtener($_REQUEST['numPrevista']);
        }

        require_once 'view/HeaderMantenimiento.php';
        require_once 'view/administrador/Socio/Prevista/Prevista-registrar.php';
        require_once 'view/Footer.php';
    }

    public function Guardar() {
        $alm = new Prevista();

        $alm->numPrevista = $_REQUEST['numPrevista'];
        $alm->ubicacion = $_REQUEST['ubicacion'];
        $alm->tipoPrevista = $_REQUEST['tipoPrevista'];
        $alm->dueño = $_REQUEST['dueño'];

        $this->modelPrevista->Obtener($_REQUEST['numPrevista']) ?
                        $this->modelPrevista->Actualizar($alm) :
                        $this->modelPrevista->Registrar($alm);

        header('Location: index.php');
    }


}
