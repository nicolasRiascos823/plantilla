<?php
    include_once "../model/Orden/OrdenModel.php";

    class OrdenController {

        public function getOrden_lab(){

            $id_persona= $_SESSION['id_persona'];
            $obj= new OrdenModel();

            $sql = "SELECT o.id_lab_orden,o.fecha,d.nombre_doc,o.id_lab_orden from lab_m_orden  o JOIN gen_p_documento d ON o.id_documento = d.id_documento JOIN fac_m_tarjetero t ON o.id_historia= t.id_tarjetero JOIN gen_p_persona p ON t.id_persona= p.id_persona WHERE t.id_persona= $id_persona ORDER BY o.id_lab_orden DESC";
            $orden= $obj->consultar($sql);
            
            include_once "../view/Orden/consult.php";
        }
        public function filtro(){
           
            $obj= new OrdenModel();
            $buscar = $_POST['buscar'];
            $id_persona= $_SESSION['id_persona'];

            $sql="SELECT o.id_lab_orden,o.fecha,d.nombre_doc,o.orden from lab_m_orden  o JOIN gen_p_documento d ON o.id_documento = d.id_documento JOIN fac_m_tarjetero t ON o.id_historia= t.id_tarjetero JOIN gen_p_persona p ON t.id_persona= p.id_persona WHERE t.id_persona= $id_persona and o.orden like '%$buscar%'";

            $orden = $obj->consultar($sql);
            include_once "../view/Orden/filtro.php";
        }

        public function verDetalle(){
            $obj = new OrdenModel();

            $id_orden=$_GET['id'];
            $id_persona= $_SESSION['id_persona'];

            $sql="SELECT G.nombre_grupo,R.ID_ORDEN_RESULTADOS,C.nombre_cups,p.id_lab_pruebas,p.nombre_prueba,L.nombre,PO.valor_ref_max_f,P.unidad FROM LAB_M_ORDEN_RESULTADOS R JOIN LAB_P_PRUEBAS P ON R.ID_PRUEBA= P.id_lab_pruebas JOIN LAB_P_PROCEDIMIENTOS PRO ON P.ID_PROCEDIMIENTO = PRO.ID_PROCEDIMIENTOS JOIN LAB_P_GRUPOS G ON PRO.ID_GRUPO_LABORATORIO = G.ID_LAB_GRUPOS JOIN lab_p_cups C ON PRO.ID_CUPS = C.ID_CUPS JOIN GEN_P_LISTOPCION L ON P.ID_TIPO_RESULTADO=L.ID JOIN LAB_P_PRUEBAS_OPCIONES PO ON R.ID_PRUEBAOPCION = PO.ID_PRUEBAS_OPCIONES JOIN lab_m_orden  O ON R.ID_ORDEN= O.ID_LAB_ORDEN  JOIN fac_m_tarjetero t ON o.id_historia= t.id_tarjetero WHERE t.id_persona= $id_persona AND R.ID_ORDEN =$id_orden";
        
            $detalle = $obj->consultar($sql);
                $sql= "SELECT p.nombre1,p.nombre2,p.apellido1,p.apellido2, t.id_persona, s.sexo,o.fecha, o.id_profesional_ordena, (SELECT p2.nombre1 FROM fac_p_profesional pro JOIN gen_p_persona p2 ON pro.id_persona = p2.id_persona JOIN gen_p_listopcion l ON pro.id_tipo_prof = l.id WHERE pro.id_tipo_prof=4) AS medico FROM lab_m_orden o JOIN fac_m_tarjetero t ON o.id_historia = t.id_tarjetero  JOIN gen_p_persona p ON t.id_persona = p.id_persona  JOIN sexo_biologico s ON p.id_sexobiologico = s.id_sexo where o.id_lab_orden=$id_orden;";

                $informacion= $obj->consultar($sql);

            include_once "../view/Orden/verDetalle.php";
        }
        public function filtroFecha(){

            $obj = new OrdenModel();

            $fechaInicio = $_POST['fechaInicio'];
            $fechaFin = $_POST['fechaFin'];
            $id_persona= $_SESSION['id_persona'];

            $sql = "SELECT o.id_lab_orden,o.fecha,d.nombre_doc,o.orden from lab_m_orden  o JOIN gen_p_documento d ON o.id_documento = d.id_documento JOIN fac_m_tarjetero t ON o.id_historia= t.id_tarjetero JOIN gen_p_persona p ON t.id_persona= p.id_persona WHERE t.id_persona= $id_persona AND o.fecha BETWEEN '$fechaInicio' AND '$fechaFin' ORDER BY o.id_lab_orden DESC";

            $orden = $obj->consultar($sql);

            include_once '../view/Orden/filtro.php';
        }
        public function ordenamiento(){
            $obj = new OrdenModel();

            $orden = $_POST['orden'];
            $id_persona= $_SESSION['id_persona'];

            $sql = "SELECT o.id_lab_orden,o.fecha,d.nombre_doc,o.orden from lab_m_orden  o JOIN gen_p_documento d ON o.id_documento = d.id_documento JOIN fac_m_tarjetero t ON o.id_historia= t.id_tarjetero JOIN gen_p_persona p ON t.id_persona= p.id_persona WHERE t.id_persona= $id_persona ORDER BY o.id_lab_orden $orden";

            $orden = $obj->consultar($sql);

            include_once '../view/Orden/filtro.php';
        }
    }
?>