<?php
    include_once "../modelo/Ordenlab/OrdenlabModel.php";

    class OrdenlabController {

        public function getOrden_lab(){

            $obj= new OrdenlabModel();
            $sql = "SELECT o.id_lab_orden,o.fecha,d.nombre,o.orden from lab_m_orden  o JOIN gen_p_documento d ON o.id_documento = d.id_documento JOIN fac_m_tarjetero t ON o.id_historia= t.id_tarjetero JOIN gen_p_persona p ON t.id_persona= p.id_persona;";
            $orden= $obj->consultar($sql);
            include_once "../view/Ordenlab/consult.php";
        }
    }
?>