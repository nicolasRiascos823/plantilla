<?php
    include_once '../lib/helpers.php';
    include_once '../model/MasterModel.php';

    $obj = new MasterModel();

    $sql = "SELECT * FROM gen_p_documento";
    $tipo_documentos = $obj->consultar($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Clínica</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/R-FAST.png" alt="Logo Clínica">
        </div>
        <form class="login-form" action="<?=getUrl("Acceso","Acceso","login",false,"ajax")?>" method="POST">
            <h2>Inicio de Sesión</h2>
            <div class="form-group">
                <label for="id_tipodoc">Tipo de Identificación:</label>
                <select id="id_tipodoc" name="id_tipodoc" required>
                    <option value="">Seleccione</option>
                    <?php
                        foreach($tipo_documentos as $tip_doc){
                            echo "<option value='".$tip_doc['id_documento']."'>".$tip_doc['nombre_doc']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="numeroId">Número de Identificación:</label>
                <input type="text" id="numeroId" name="numeroId" required>
            </div>
            <div class="form-group">
                <label for="fec_nac">Fecha de Nacimiento:</label>
                <input type="date" id="fec_nac" name="fec_nac" required>
            </div>
            <div class="form-group">
                <?php
                    if(isset($_SESSION['error'])){
                        echo "<p class='text-danger'>".$_SESSION['error']."</p>";
                    }
                ?>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
