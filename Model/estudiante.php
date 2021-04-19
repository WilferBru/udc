<?php

class Estudiante
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function subirEncuesta($id,$nombre,$apellido,$edad,$genero,$estado_civil,$nivel_ingresos,$programa_formacion,$asignaturas_matrticuladas,$tipo_institucion_procedencia,$calificacion_nivel_educacion,$fecha_graduacion,$localidad,$barrio,$direccion,$tipo_vivienda,$nivel_educativo_padre,$nivel_educativo_madre,$profecion_padre,$profecion_madre)
    {
        try
        {

            $stm = $this->pdo->prepare("INSERT INTO encuesta_jdng (nombre,apellido,edad,genero,estado_civil,nivel_ingresos,programa_formacion,asignaturas_matriculadas,tipo_institucion_procedencia,calificacion_nivel_educacion,fecha_graduacion,localidad,barrio,direccion,tipo_vivienda,nivel_educativo_padre,nivel_educativo_madre,profecion_padre,profecion_madre) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stm->execute(array($nombre,$apellido,$edad,$genero,$estado_civil,$nivel_ingresos,$programa_formacion,$asignaturas_matrticuladas,$tipo_institucion_procedencia,$calificacion_nivel_educacion,$fecha_graduacion,$localidad,$barrio,$direccion,$tipo_vivienda,$nivel_educativo_padre,$nivel_educativo_madre,$profecion_padre,$profecion_madre));

            $id_encuesta = $this->pdo->LastInsertId();

            $stm = $this->pdo->prepare("UPDATE registro_jdng SET encuesta = ? WHERE id = ?");
            $stm->execute(array($id_encuesta, $id));

            $stm = $this->pdo->prepare("SELECT email, password FROM registro_jdng WHERE id = ?");
            $stm->execute(array($id));

            unset($_REQUEST);

            $date = $stm->fetch(PDO::FETCH_ASSOC);
            $email = $date['email'];
            $password = $date['password'];

            header("location: model/destruir_sesion.php?email=$email&password=$password");

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function visualizarEncuesta($id_encuesta){

        try {

            $stm = $this->pdo->prepare("SELECT * FROM encuesta_jdng WHERE id = ?");
            $stm->execute(array($id_encuesta));

            $row[] = $stm->fetchAll(PDO::FETCH_ASSOC);

            $input2 = array('genero','estado_civil', 'nivel_ingresos', 'programa_formacion', 'tipo_institucion_procedencia', 'calificacion_nivel_educacion', 'barrio', 'tipo_vivienda', 'nivel_educativo_padres', 'nivel_educativo_padres');

            for($i=0;$i<count($input2);$i++) {

                if($input2[$i] == 'nivel_educativo_padres') {

                    $id_encuesta = $row[0][0]['nivel_educativo_padre'];

                    if(isset($a)){

                        $id_encuesta = $row[0][0]['nivel_educativo_madre'];

                    }

                    $a=1;

                }else{

                    $id_encuesta = $row[0][0][$input2[$i]];

                }

                $stm = $this->pdo->prepare("SELECT nombre_$input2[$i] FROM $input2[$i]_jdng WHERE id = ?");
                $stm->execute(array($id_encuesta));

                $row[] = $stm->fetchAll(PDO::FETCH_ASSOC);

            }

            return $row;

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function select()
    {
        try {

            $inputs = array('genero','estado_civil', 'nivel_ingresos', 'programa_formacion', 'tipo_institucion_procedencia', 'calificacion_nivel_educacion', 'barrio', 'tipo_vivienda', 'nivel_educativo_padres', 'nivel_educativo_padres');

            for ($i=0;$i<count($inputs);$i++) {
                $stm = $this->pdo->prepare("SELECT nombre_$inputs[$i] FROM $inputs[$i]_jdng");
                $stm->execute();

                $row[] = $stm->fetchAll(PDO::FETCH_ASSOC);
            }

            return $row;

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function actualizarEncuesta($id,$nombre,$apellido,$edad,$genero,$estado_civil,$nivel_ingresos,$programa_formacion,$asignaturas_matrticuladas,$tipo_institucion_procedencia,$calificacion_nivel_educacion,$fecha_graduacion,$localidad,$barrio,$direccion,$tipo_vivienda,$nivel_educativo_padre,$nivel_educativo_madre,$profecion_padre,$profecion_madre)
    {
        try
        {

            $stm = $this->pdo->prepare("UPDATE encuesta_jdng SET nombre=?, apellido=?, edad=?, genero=?, estado_civil=?, nivel_ingresos=?, programa_formacion=?, asignaturas_matriculadas=?, tipo_institucion_procedencia=?, calificacion_nivel_educacion=?, fecha_graduacion=?, localidad=?, barrio=?, direccion=?, tipo_vivienda=?, nivel_educativo_padre=?, nivel_educativo_madre=?, profecion_padre=?, profecion_madre=? WHERE id=?");
            $stm->execute(array($nombre,$apellido,$edad,$genero,$estado_civil,$nivel_ingresos,$programa_formacion,$asignaturas_matrticuladas,$tipo_institucion_procedencia,$calificacion_nivel_educacion,$fecha_graduacion,$localidad,$barrio,$direccion,$tipo_vivienda,$nivel_educativo_padre,$nivel_educativo_madre,$profecion_padre,$profecion_madre,$id));

            header('location: ?a=visualizarEncuesta&toast=1');
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

}