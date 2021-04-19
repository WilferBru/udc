<?php

require_once 'model/usuario.php';

class UsuarioController
{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Usuario();
    }

    public function Login()
    {
        require_once 'view/header.php';
        require_once 'view/usuario/login.php';

    }

    public function Register()
    {
        require_once 'view/header.php';
        require_once 'view/usuario/register.php';

    }

    public function ForgotPassword()
    {
        require_once 'view/header.php';
        require_once 'view/usuario/ForgotPassword.php';

    }

    public function validateLogin()
    {
        $usuario = new Usuario();

        if (isset($_REQUEST['email']) && $_REQUEST['email']!='' &&
            isset($_REQUEST['password']) &&$_REQUEST['password'] != ''){

            $usuario = $this->model->validateLogin($_REQUEST['email'], $_REQUEST['password']);

            if ($usuario == false){

                header('location: index.php?toast=1');

            }else {

                $_SESSION['id'] = $usuario->id;
                $_SESSION['name'] = $usuario->name;
                $_SESSION['lastName'] = $usuario->lastName;
                $_SESSION['encuesta'] = $usuario->encuesta;

                if ($usuario->rol == 1) {

                    $_SESSION['rol'] = 'estudiante';

                    if ($_SESSION['encuesta'] == 0){

                        header('Location: ?a=encuesta');
                        die;
                    }

                }
                if ($usuario->rol == 2) {

                    $_SESSION['rol'] = "administrador";

                }

                header('Location: index.php');

            }
        }else{
            header('Location: index.php?toast=2');
        }
    }

    public function validateRegister()
    {

        $usuario = new Usuario();

        if (isset($_REQUEST['name']) && $_REQUEST['name'] !='' &&
            isset($_REQUEST['lastName']) && $_REQUEST['lastName'] !='' &&
            isset($_REQUEST['email']) && $_REQUEST['email'] !='' &&
            isset($_REQUEST['password']) && $_REQUEST['password'] !='' &&
            isset($_REQUEST['identificacion']) && $_REQUEST['identificacion'] !='' &&
            isset($_REQUEST['phone']) && $_REQUEST['phone'] !='') {

            if ($_REQUEST['password'] != $_REQUEST['repeatPassword']){

                header('location: ?a=register&toast=5');

                die;

            }

        }else{

            header('location: ?a=register&toast=2');
            die;

        }

        $usuario = $this->model->validateRegister($_REQUEST['identificacion'], $_REQUEST['email']);

        $rol = $usuario ;
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $usuario = $this->model->Register($_REQUEST['identificacion'], $_REQUEST['name'], $_REQUEST['lastName'], $_REQUEST['phone'], $_REQUEST['email'], $_REQUEST['password'], $rol);

        header('location: ?a=validateLogin&email='.$email.'&password='.$password);

    }

    public function validateForgotPassword()
    {
        $usuario = new Usuario();

        if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {

            $usuario = $this->model->validateLogin($_REQUEST['email'], $_REQUEST['password']);

            if ($usuario == false) {

                header('location: index.php');

            } else {
                echo 'continuara...';
            }
        }
    }
}