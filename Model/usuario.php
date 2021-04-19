<?php

class Usuario
{
    private $pdo;

    public $id;
    public $name;
    public $lastName;
    public $rol;
    public $encuesta;

    public function __CONSTRUCT()
    {
        try {

            $this->pdo = Database::StartUp();

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function validateLogin($email, $password)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM registro_jdng WHERE email = ? AND password = ?");
            $stm->execute(array($email, $password));

            if ($stm->rowCount() > 0) {

                return $stm->fetch(PDO::FETCH_OBJ);

            } else {

                return false;

            }

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function validateRegister($identificacion, $email)
    {
        try {

            //verifico si el usuario ya esta registrado en UdC+
            $stm = $this->pdo->prepare("SELECT * FROM registro_jdng WHERE identificacion = ?");
            $stm->execute(array($identificacion));

            if ($stm->rowCount() > 0) {

                header('location: ?a=register&toast=4');

                die;

            }

            //verifico si el email ya esta registrado en UdC+
            $stm = $this->pdo->prepare("SELECT * FROM registro_jdng WHERE email = ?");
            $stm->execute(array($email));

            if ($stm->rowCount() > 0) {

                    header('location: ?a=register&toast=1');

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

                        header('location: ?a=register&toast=3');

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
}