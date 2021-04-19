<?php

class Administrador
{
    private $pdo;

    public $identificacion;
    public $name;
    public $lastName;
    public $encuesta;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Index($consultas)
    {
        try {
            //consultas para el index

            /*

            ***** Indice *****

            1.cards
            2.grafica programas de formacion
            3.grafica genero

            */

            //cards
            $sql[0] = "SELECT COUNT(estudiantes_jdng.identificacion) AS 'estudiantes_no_registrados' FROM estudiantes_jdng LEFT JOIN registro_jdng ON estudiantes_jdng.identificacion = registro_jdng.identificacion WHERE registro_jdng.identificacion IS NULL ";
            $sql[1] = "SELECT COUNT(*) AS 'administrativos' FROM registro_jdng WHERE rol = 2";
            $sql[2] = "SELECT COUNT(estudiantes_jdng.identificacion) AS 'estudiantes_registrados' FROM estudiantes_jdng INNER JOIN registro_jdng ON estudiantes_jdng.identificacion = registro_jdng.identificacion";
            $sql[3] = "SELECT COUNT(*) AS 'encuestas_realizadas' FROM encuesta_jdng";

            $consulta = $consultas[0];

            for ($i=0;$i<=3;$i++) {

                $stm = $this->pdo->prepare($sql[$i]);
                $stm->execute();
                $rows[$consulta][] = $stm->fetch(PDO::FETCH_ASSOC);

            }

            unset($sql);

            $sql[0] = "SELECT COUNT(programa_formacion) AS 'S.I' FROM encuesta_jdng WHERE programa_formacion =1";
            $sql[1] = "SELECT COUNT(programa_formacion) AS 'C.C' FROM encuesta_jdng WHERE programa_formacion =2";
            $sql[2] = "SELECT COUNT(programa_formacion) AS 'M.E.I' FROM encuesta_jdng WHERE programa_formacion =3";
            $sql[3] = "SELECT COUNT(programa_formacion) AS 'M.M.I' FROM encuesta_jdng WHERE programa_formacion =4";
            $sql[4] = "SELECT COUNT(programa_formacion) AS 'A.Q.I' FROM encuesta_jdng WHERE programa_formacion =5";
            $sql[5] = "SELECT COUNT(programa_formacion) AS 'O.P.I' FROM encuesta_jdng WHERE programa_formacion =6";

            $consulta = $consultas[1];

            for ($i=0;$i < count($sql);$i++) {

                $stm = $this->pdo->prepare($sql[$i]);
                $stm->execute();
                $rows[$consulta][] = $stm->fetch(PDO::FETCH_ASSOC);

            }

            unset($sql);

            $sql[0] = "SELECT COUNT(genero) AS 'hombre' FROM encuesta_jdng WHERE genero =1";
            $sql[1] = "SELECT COUNT(genero) AS 'mujer' FROM encuesta_jdng WHERE genero =2";


            $consulta = $consultas[2];

            for ($i=0;$i < count($sql);$i++) {

                $stm = $this->pdo->prepare($sql[$i]);
                $stm->execute();
                $rows[$consulta][] = $stm->fetch(PDO::FETCH_ASSOC);

            }

            return $rows;

        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
        }
    }

    public function validateRegister($identificacion, $email)
    {
        try {

            //verifico si el usuario ya esta registrado en UdC+
            $stm = $this->pdo->prepare("SELECT * FROM registro_jdng WHERE identificacion = ?");
            $stm->execute(array($identificacion));

            if ($stm->rowCount() > 0) {

                header('location: ?a=registrarUsuario&toast=4');

                die;

            }

            //verifico si el email ya esta registrado en UdC+
            $stm = $this->pdo->prepare("SELECT * FROM registro_jdng WHERE email = ?");
            $stm->execute(array($email));

            if ($stm->rowCount() > 0) {

                header('location: ?a=registrarUsuario&toast=1');

            }else { //consulto si el usuario a registrar se encuestra en la lista de estudiantes de la UdC

                $stm = $this->pdo->prepare("SELECT * FROM estudiantes_jdng WHERE identificacion = ?");
                $stm->execute(array($identificacion));

                if ($stm->rowCount() > 0) {

                    return 1; //si encuentra un registro me devuelve el rol de estudiante

                }else {

                    $stm = $this->pdo->prepare("SELECT * FROM administrativos_jdng WHERE identificacion = ?");
                    $stm->execute(array($identificacion));

                    if ($stm->rowCount() > 0) {

                        return 2; //si encuentra un registro me devuelve el rol de administrativo

                    } else {

                        header('location: ?a=registrarUsuario&toast=3');

                    }
                }
            }

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Register($identificacion, $name, $lastName, $phone, $email, $password, $rol)
    {
        try {

            $stm = $this->pdo->prepare("INSERT INTO registro_jdng (identificacion, name, lastName ,phone ,email, password, rol) VALUES (?,?,?,?,?,?,?)");
            $stm->execute(array($identificacion, $name, $lastName, $phone, $email, $password, $rol));

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function consultarEstudiantes(){

        try {

            $stm = $this->pdo->prepare("SELECT * FROM registro_jdng WHERE rol = 1");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function consultarAdministrativos(){

        try {

            $stm = $this->pdo->prepare("SELECT * FROM registro_jdng WHERE rol = 2");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function tablaEstudiantes(){

        try {

            $stm = $this->pdo->prepare("SELECT identificacion, name, lastName FROM estudiantes_jdng");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function tablaAdministrativos(){

        try {

            $stm = $this->pdo->prepare("SELECT identificacion, name, lastName FROM administrativos_jdng");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function consultarEncuesta(){

        try {

            $stm = $this->pdo->prepare("SELECT identificacion, name, lastName, encuesta FROM registro_jdng WHERE rol = 1");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function visualizarEncuesta($id){

        try {

            $stm = $this->pdo->prepare("SELECT * FROM encuesta_jdng WHERE id = ?");
            $stm->execute(array($id));

            $row[] = $stm->fetchAll(PDO::FETCH_ASSOC);

            $input2 = array('genero','estado_civil', 'nivel_ingresos', 'programa_formacion', 'tipo_institucion_procedencia', 'calificacion_nivel_educacion', 'barrio', 'tipo_vivienda', 'nivel_educativo_padres', 'nivel_educativo_padres');

            for($i=0;$i<count($input2);$i++) {

                if($input2[$i] == 'nivel_educativo_padres') {

                    $id = $row[0][0]['nivel_educativo_padre'];

                    if(isset($a)){

                        $id = $row[0][0]['nivel_educativo_madre'];

                    }

                    $a=1;

                }else{

                    $id = $row[0][0][$input2[$i]];

                }

                $stm = $this->pdo->prepare("SELECT nombre_$input2[$i] FROM $input2[$i]_jdng WHERE id = ?");
                $stm->execute(array($id));

                $row[] = $stm->fetchAll(PDO::FETCH_ASSOC);

            }

            return $row;

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function eliminarRegistro($identificacion){

        try {

            $stm = $this->pdo->prepare("SELECT id FROM registro_jdng WHERE identificacion = ?");
            $stm->execute(array($identificacion));

            $id = $stm->fetchAll(PDO::FETCH_ASSOC);

            $stm = $this->pdo->prepare("SELECT encuesta FROM registro_jdng WHERE identificacion = ?");
            $stm->execute(array($identificacion));

            $encuesta = $stm->fetchAll(PDO::FETCH_ASSOC);

            $stm = $this->pdo->prepare("DELETE FROM registro_jdng WHERE id = ?");
            $stm->execute(array($id[0]['id']));

            $stm = $this->pdo->prepare("DELETE FROM encuesta_jdng WHERE id = ?");
            $stm->execute(array($encuesta[0]['encuesta']));

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function eliminarEstudiante($identificacion){

        try {

            $stm = $this->pdo->prepare("DELETE FROM estudiantes_jdng WHERE identificacion = ?");
            $stm->execute(array($identificacion));

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function agregarEstudiante($name, $lastName, $identificacion){

        try {

            $stm = $this->pdo->prepare("SELECT name FROM estudiantes_jdng WHERE identificacion = ?");
            $stm->execute(array($identificacion));

            $registro = $stm->fetchAll(PDO::FETCH_ASSOC);



            if ($registro == null) {

                $stm = $this->pdo->prepare("INSERT INTO estudiantes_jdng (name, lastName ,identificacion) VALUES (?,?,?)");
                $stm->execute(array($name, $lastName, $identificacion));

            }else{

                header('location: ?a=tablaEstudiantes&toast=2');
                die;

            }

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function eliminarAdministrativo($identificacion){

        try {

            $stm = $this->pdo->prepare("DELETE FROM administrativos_jdng WHERE identificacion = ?");
            $stm->execute(array($identificacion));

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

    public function agregarAdministrativo($name, $lastName, $identificacion){

        try {

            $stm = $this->pdo->prepare("SELECT name FROM administrativos_jdng WHERE identificacion = ?");
            $stm->execute(array($identificacion));

            $registro = $stm->fetchAll(PDO::FETCH_ASSOC);

            if ($registro == null) {

                $stm = $this->pdo->prepare("INSERT INTO administrativos_jdng (name, lastName ,identificacion) VALUES (?,?,?)");
                $stm->execute(array($name, $lastName, $identificacion));

            }else{

                header('location: ?a=tablaAdministrativos&toast=2');
                die;

            }

        } catch (Exception $e) {

            die($e->getMessage());

        }
    }

}
