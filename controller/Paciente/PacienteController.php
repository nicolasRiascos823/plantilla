<?php
    include_once "../model/Paciente/PacienteModel.php";

    class PacienteController {
           //ver productos
            public function getPerfil() {
                 $obj=new PacienteModel();
                 $sql="SELECT p.nombre1,p.nombre2,p.apellido1,p.apellido2,p.fecha_nac,s.sexo,p.direccion,p.email, p.id_sexobiologico from gen_p_persona p JOIN sexo_biologico s ON p.id_sexobiologico= s.id_sexo  WHERE id_persona =".$_SESSION['id_persona'];
                 $perfil= $obj->consultar($sql);
                 include_once "../view/Paciente/consult.php";
            }
    }
?>