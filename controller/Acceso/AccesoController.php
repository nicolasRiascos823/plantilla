<?php

    include_once '../model/Acceso/AccesoModel.php';

    class AccesoController{

        public function login(){

            $obj = new AccesoModel();

            $id_tipodoc = $_POST['id_tipodoc'];
            $numeroId = $_POST['numeroId'];
            $fec_nac = $_POST['fec_nac'];

            $sql = "SELECT id_persona, /*numeroId,*/ nombre1, nombre2, apellido1, apellido2, email FROM gen_p_persona WHERE id_tipodoc = $id_tipodoc /*AND numeroId = '$numeroId'*/ AND fecha_nac = '$fec_nac'";

            $login = $obj->consultar($sql);

            if(mysqli_num_rows($login)>0){

                foreach($login as $user){
                    $_SESSION['id_persona'] = $user['id_persona'];
                    //$_SESSION['numeroId'] = $user['numeroId'];
                    $_SESSION['nombre1'] = $user['nombre1'];
                    $_SESSION['nombre2'] = $user['nombre2'];
                    $_SESSION['apellido1'] = $user['apellido1'];
                    $_SESSION['apellido2'] = $user['apellido2'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['auth'] = "authorized";
                }
                redirect("index.php");

            }else{
                $_SESSION['error'] = "Los datos son incorrectos";
                redirect("login.php");

            }

        }
        public function logout(){
            session_destroy();
            redirect("login.php");
        }
    }

?>