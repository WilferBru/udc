<?php

require_once 'model/administrador.php';

class AdministradorController
{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Administrador();
    }

    public function Index()
    {
        $consultas = array('cards', 'grafica_programas_de_formacion', 'grafica_genero');

        $index = $this->model->Index($consultas);

        $_SESSION['index'] = $index;

        require_once 'view/header.php';
        require_once 'view/administrador/index_administrador.php';
    }

    public function registrarUsuario()
    {
        require_once 'view/header.php';
        require_once 'view/administrador/registrar_usuario.php';
    }

    public function consultarEstudiante()
    {
        require_once 'view/header.php';
        require_once 'view/administrador/consultar_estudiante.php';
    }

    public function consultarAdministrativos()
    {
        require_once 'view/header.php';
        require_once 'view/administrador/consultar_administrativos.php';
    }

    public function tablaEstudiantes()
    {
        require_once 'view/header.php';
        require_once 'view/administrador/tabla_estudiantes.php';
    }

    public function tablaAdministrativos()
    {
        require_once 'view/header.php';
        require_once 'view/administrador/tabla_administrativos.php';
    }

    public function consultarEncuesta()
    {
        require_once 'view/header.php';
        require_once 'view/administrador/consultar_encuesta.php';
    }

    public function visualizarEncuesta()
    {
        require_once 'view/header.php';
        require_once "view/administrador/visualizar_encuesta.php";
    }

    public function validateRegister()
    {

        if (isset($_REQUEST['name']) && $_REQUEST['name'] !='' &&
            isset($_REQUEST['lastName']) && $_REQUEST['lastName'] !='' &&
            isset($_REQUEST['email']) && $_REQUEST['email'] !='' &&
            isset($_REQUEST['password']) && $_REQUEST['password'] !='' &&
            isset($_REQUEST['identificacion']) && $_REQUEST['identificacion'] !='' &&
            isset($_REQUEST['phone']) && $_REQUEST['phone'] !='') {

            if ($_REQUEST['password'] != $_REQUEST['repeatPassword']){

                header('location: ?a=registrarUsuario&toast=5');
                die;
            }

        }else{

            header('location: ?a=registrarUsuario&toast=2');
            die;
        }

        $usuario = $this->model->validateRegister($_REQUEST['identificacion'], $_REQUEST['email']);

        $rol = $usuario ;

        $usuario = $this->model->Register($_REQUEST['identificacion'], $_REQUEST['name'], $_REQUEST['lastName'], $_REQUEST['phone'], $_REQUEST['email'], $_REQUEST['password'], $rol);

        header('location: ?a=registrarUsuario&toast=6');

    }

    public function eliminarUsuario()
    {
        $this->model->eliminarRegistro($_REQUEST['identificacion']);

        if ($_REQUEST['page'] == 1) {

            header('location: ?a=consultarEstudiante&toast=1');

        }else{

            header('location: ?a=consultarAdministrativos&toast=1');

        }
    }

    public function eliminarEstudiante()
    {
        $this->model->eliminarEstudiante($_REQUEST['identificacion']);

        header('location: ?a=tablaEstudiantes&toast=1');

    }

    public function agregarEstudiante()
    {

        if (isset($_REQUEST['name']) && $_REQUEST['name'] !='' &&
            isset($_REQUEST['lastName']) && $_REQUEST['lastName'] !='' &&
            isset($_REQUEST['identificacion']) && $_REQUEST['identificacion'] !='' && $_REQUEST['identificacion'] > 0) {

            $this->model->agregarEstudiante($_REQUEST['name'], $_REQUEST['lastName'], $_REQUEST['identificacion']);

            header('location: ?a=tablaEstudiantes&toast=2');

        }else{

            header('location: ?a=tablaEstudiantes&toast=3');


        }



    }

    public function eliminarAdministrativo()
    {
        $this->model->eliminarAdministrativo($_REQUEST['identificacion']);

        header('location: ?a=tablaAdministrativos&toast=1');

    }

    public function agregarAdministrativo()
    {

        if (isset($_REQUEST['name']) && $_REQUEST['name'] !='' &&
            isset($_REQUEST['lastName']) && $_REQUEST['lastName'] !='' &&
            isset($_REQUEST['identificacion']) && $_REQUEST['identificacion'] !='' && $_REQUEST['identificacion'] > 0) {

            $this->model->agregarAdministrativo($_REQUEST['name'], $_REQUEST['lastName'], $_REQUEST['identificacion']);

            header('location: ?a=tablaAdministrativos&toast=2');

        }else{

            header('location: ?a=tablaAdministrativos&toast=3');

        }

    }

    public function buzonDeSugerencias()
    {

        if (isset($_REQUEST['sugerencia']) && $_REQUEST['sugerencia'] !='') {

            header('location: ?index.php');
            die;

            $email = 'keiner-2017@hotmail.com';
            $msg = $_REQUEST['sugerencia'];

            header('location: ?toast=1');

        }else{

            header('location: ?toast=2');

        }

    }

}