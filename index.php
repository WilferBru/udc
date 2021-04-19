<?php

    session_start();

    require_once 'model/database.php';

    if (!isset($_SESSION['rol'])){

        $controller = 'usuario';

        if(!isset($_REQUEST['a']))
        {
            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->Login();

        }else{

            // Obtenemos el controlador que queremos cargar
            $controller = 'usuario';
            $accion = $_REQUEST['a'];

            // Instanciamos el controlador
            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;

            // Llama la accion
            call_user_func(array($controller, $accion));

        }

    }else {

        $controller = $_SESSION['rol'];

        if ($controller == 'estudiante'){

            if (!isset($_REQUEST['a'])) {

                require_once "controller/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;
                $controller->visualizarEncuesta();

            }else{

                // Obtenemos el controlador que queremos cargar
                $controller = 'estudiante';
                $accion = $_REQUEST['a'];

                // Instanciamos el controlador
                require_once "controller/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;

                // Llama la accion
                call_user_func(array($controller, $accion));

            }
        }

        if ($controller == 'administrador'){

            if (!isset($_REQUEST['a'])) {

                require_once "controller/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;
                $controller->Index();

            }else{

                // Obtenemos el controlador que queremos cargar
                $controller = 'administrador';
                $accion = $_REQUEST['a'];

                // Instanciamos el controlador
                require_once "controller/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;

                // Llama la accion
                call_user_func(array($controller, $accion));

            }
        }
    }

?>
