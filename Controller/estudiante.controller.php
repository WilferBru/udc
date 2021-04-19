<?php

require_once 'model/estudiante.php';

class EstudianteController
{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Estudiante();
    }

    public function encuesta()
    {
        $input2 = array('nombre_genero','nombre_estado_civil', 'nombre_nivel_ingresos', 'nombre_programa_formacion', 'nombre_tipo_institucion_procedencia', 'nombre_calificacion_nivel_educacion', 'nombre_barrio', 'nombre_tipo_vivienda', 'nombre_nivel_educativo_padres', 'nombre_nivel_educativo_padres');
        $input3 = array('genero','estado_civil', 'nivel_ingresos', 'programa_formacion', 'tipo_institucion_procedencia', 'calificacion_nivel_educacion', 'barrio', 'tipo_vivienda', 'nivel_educativo_padre', 'nivel_educativo_madre');

        $input = $this->model->select();

        for ($i=0; $i < count($input2);$i++){

            ${$input3[$i]} = $input[$i];

        }

        require_once 'view/header.php';
        require_once "view/estudiante/encuesta.php";
    }

    public function subirEncuesta()
    {
        if (isset($_REQUEST['nombre']) && $_REQUEST['nombre'] !='' &&
            isset($_REQUEST['apellido']) && $_REQUEST['apellido'] !='' &&
            isset($_REQUEST['edad']) && $_REQUEST['edad'] !='' &&
            isset($_REQUEST['genero']) && $_REQUEST['genero'] !='' &&
            isset($_REQUEST['estado_civil']) && $_REQUEST['estado_civil'] !='' &&
            isset($_REQUEST['nivel_ingresos']) && $_REQUEST['nivel_ingresos'] !=''&&
            isset($_REQUEST['programa_formacion']) && $_REQUEST['programa_formacion'] !='' &&
            isset($_REQUEST['asignaturas_matriculadas']) && $_REQUEST['asignaturas_matriculadas'] !='' &&
            isset($_REQUEST['tipo_institucion_procedencia']) && $_REQUEST['tipo_institucion_procedencia'] !='' &&
            isset($_REQUEST['calificacion_nivel_educacion']) && $_REQUEST['calificacion_nivel_educacion'] !='' &&
            isset($_REQUEST['fecha_graduacion']) && $_REQUEST['fecha_graduacion'] !='' &&
            isset($_REQUEST['barrio']) && $_REQUEST['barrio'] !='' &&
            isset($_REQUEST['direccion']) && $_REQUEST['direccion'] !='' &&
            isset($_REQUEST['tipo_vivienda']) && $_REQUEST['tipo_vivienda'] !='' &&
            isset($_REQUEST['nivel_educativo_padre']) && $_REQUEST['nivel_educativo_padre'] !='' &&
            isset($_REQUEST['nivel_educativo_madre']) && $_REQUEST['nivel_educativo_madre'] !='' &&
            isset($_REQUEST['profecion_padre']) && $_REQUEST['profecion_padre'] !='' &&
            isset($_REQUEST['profecion_madre']) && $_REQUEST['profecion_madre'] !='') {

            if ($_REQUEST['barrio'] >= 1 && $_REQUEST['barrio'] <= 84) {

                $_REQUEST['localidad'] = 1;

            }elseif ($_REQUEST['barrio'] >= 85 && $_REQUEST['barrio'] <= 119) {

                $_REQUEST['localidad'] = 2;

            }elseif ($_REQUEST['barrio'] >= 120 && $_REQUEST['barrio'] <= 186) {

                $_REQUEST['localidad'] = 3;
            }

            $this->model->subirEncuesta($_SESSION['id'],$_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['edad'],$_REQUEST['genero'],$_REQUEST['estado_civil'],$_REQUEST['nivel_ingresos'],$_REQUEST['programa_formacion'],$_REQUEST['asignaturas_matriculadas'],$_REQUEST['tipo_institucion_procedencia'],$_REQUEST['calificacion_nivel_educacion'],$_REQUEST['fecha_graduacion'],$_REQUEST['localidad'],$_REQUEST['barrio'],$_REQUEST['direccion'],$_REQUEST['tipo_vivienda'],$_REQUEST['nivel_educativo_padre'],$_REQUEST['nivel_educativo_madre'],$_REQUEST['profecion_padre'],$_REQUEST['profecion_madre']);

        }else{
            header('location: ?a=encuesta&toast=1');
        }
    }

    public function visualizarEncuesta()
    {

        $input1 = array('nombre', 'apellido', 'edad', 'asignaturas_matriculadas','fecha_graduacion', 'direccion', 'profecion_padre', 'profecion_madre');
        $input2 = array('nombre_genero','nombre_estado_civil', 'nombre_nivel_ingresos', 'nombre_programa_formacion', 'nombre_tipo_institucion_procedencia', 'nombre_calificacion_nivel_educacion', 'nombre_barrio', 'nombre_tipo_vivienda', 'nombre_nivel_educativo_padres', 'nombre_nivel_educativo_padres');
        $input3 = array('genero','estado_civil', 'nivel_ingresos', 'programa_formacion', 'tipo_institucion_procedencia', 'calificacion_nivel_educacion', 'barrio', 'tipo_vivienda', 'nivel_educativo_padre', 'nivel_educativo_madre');

        $a = 1;
        $r = $this->model->visualizarEncuesta($_SESSION['encuesta']);

        for ($i=0; $i < count($input1);$i++){

            ${$input1[$i]} = $r[0][0][$input1[$i]];

        }

        for ($i=0; $i < count($input2);$i++){

            ${$input3[$i]} = $r[$a][0][$input2[$i]];
            $a++;
        }


        require_once 'view/header.php';
        require_once "view/estudiante/visualizar_encuesta.php";
    }

    public function editarEncuesta()
    {
        $input1 = array('nombre', 'apellido', 'edad', 'asignaturas_matriculadas','fecha_graduacion', 'direccion', 'profecion_padre', 'profecion_madre');
        $input2 = array('nombre_genero','nombre_estado_civil', 'nombre_nivel_ingresos', 'nombre_programa_formacion', 'nombre_tipo_institucion_procedencia', 'nombre_calificacion_nivel_educacion', 'nombre_barrio', 'nombre_tipo_vivienda', 'nombre_nivel_educativo_padres', 'nombre_nivel_educativo_padres');
        $input3 = array('genero','estado_civil', 'nivel_ingresos', 'programa_formacion', 'tipo_institucion_procedencia', 'calificacion_nivel_educacion', 'barrio', 'tipo_vivienda', 'nivel_educativo_padre', 'nivel_educativo_madre');
        $select = 'select';

        $a = 1;
        $r = $this->model->visualizarEncuesta($_SESSION['encuesta']);
        $input = $this->model->select();

        for ($i=0; $i < count($input1);$i++){

            ${$input1[$i]} = $r[0][0][$input1[$i]];

        }

        for ($i=0; $i < count($input2);$i++){

            $select = 'select_'.$input3[$i];

            ${$select} = $r[$a][0][$input2[$i]];
            $a++;

        }

        for ($i=0; $i < count($input2);$i++){

            ${$input3[$i]} = $input[$i];

        }

        require_once 'view/header.php';
        require_once "view/estudiante/editar_encuesta.php";
    }

    public function actualizarEncuesta()
    {

        if (isset($_REQUEST['nombre']) && $_REQUEST['nombre'] !='' &&
            isset($_REQUEST['apellido']) && $_REQUEST['apellido'] !='' &&
            isset($_REQUEST['edad']) && $_REQUEST['edad'] !='' &&
            isset($_REQUEST['genero']) && $_REQUEST['genero'] !='' &&
            isset($_REQUEST['estado_civil']) && $_REQUEST['estado_civil'] !='' &&
            isset($_REQUEST['nivel_ingresos']) && $_REQUEST['nivel_ingresos'] !=''&&
            isset($_REQUEST['programa_formacion']) && $_REQUEST['programa_formacion'] !='' &&
            isset($_REQUEST['asignaturas_matriculadas']) && $_REQUEST['asignaturas_matriculadas'] !='' &&
            isset($_REQUEST['tipo_institucion_procedencia']) && $_REQUEST['tipo_institucion_procedencia'] !='' &&
            isset($_REQUEST['calificacion_nivel_educacion']) && $_REQUEST['calificacion_nivel_educacion'] !='' &&
            isset($_REQUEST['fecha_graduacion']) && $_REQUEST['fecha_graduacion'] !='' &&
            isset($_REQUEST['barrio']) && $_REQUEST['barrio'] !='' &&
            isset($_REQUEST['direccion']) && $_REQUEST['direccion'] !='' &&
            isset($_REQUEST['tipo_vivienda']) && $_REQUEST['tipo_vivienda'] !='' &&
            isset($_REQUEST['nivel_educativo_padre']) && $_REQUEST['nivel_educativo_padre'] !='' &&
            isset($_REQUEST['nivel_educativo_madre']) && $_REQUEST['nivel_educativo_madre'] !='' &&
            isset($_REQUEST['profecion_padre']) && $_REQUEST['profecion_padre'] !='' &&
            isset($_REQUEST['profecion_madre']) && $_REQUEST['profecion_madre'] !='') {

            if ($_REQUEST['barrio'] >= 1 && $_REQUEST['barrio'] <= 84) {

                $_REQUEST['localidad'] = 1;

            }elseif ($_REQUEST['barrio'] >= 85 && $_REQUEST['barrio'] <= 119) {

                $_REQUEST['localidad'] = 2;

            }elseif ($_REQUEST['barrio'] >= 120 && $_REQUEST['barrio'] <= 186) {

                $_REQUEST['localidad'] = 3;
            }

            $this->model->ActualizarEncuesta($_SESSION['encuesta'],$_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['edad'],$_REQUEST['genero'],$_REQUEST['estado_civil'],$_REQUEST['nivel_ingresos'],$_REQUEST['programa_formacion'],$_REQUEST['asignaturas_matriculadas'],$_REQUEST['tipo_institucion_procedencia'],$_REQUEST['calificacion_nivel_educacion'],$_REQUEST['fecha_graduacion'],$_REQUEST['localidad'],$_REQUEST['barrio'],$_REQUEST['direccion'],$_REQUEST['tipo_vivienda'],$_REQUEST['nivel_educativo_padre'],$_REQUEST['nivel_educativo_madre'],$_REQUEST['profecion_padre'],$_REQUEST['profecion_madre']);

        }else{
            header('location: ?a=editarEncuesta&toast=1');
        }
    }

}