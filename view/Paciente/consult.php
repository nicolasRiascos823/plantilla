<?php foreach ($perfil as $p) { ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Encabezado de saludo -->
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h2| class="display-6">Hola <strong><?=$p['nombre1'] . ' ' . $p['nombre2']?></strong><img src="img/saludo.gif" alt="" style="width:5%; margin-top:-10px" class="px-3"></h2>
                    <p class="card-text">Bienvenido al portal</p>
                </div>
            </div>

            <!-- Sección del perfil del paciente -->
            
                <div class="card mb-4  p-3">
                    <div class="row g-0">
                        <!-- Imagen de perfil -->
                        <div class="col-md-4 text-center mt-2 p-3">
                            <?php
                                if($p['id_sexobiologico']==1){
                                    $imagen = "../web/img/hombre.png";
                                }else{
                                    $imagen = "../web/img/mujer.png";
                                }
                            ?>
                            <img src="<?=$imagen?>" alt="No cargó la imagen" class="img-fluid rounded-circle" style="width:35%">
                        </div>
                        <!-- Información del perfil -->
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <p class="card-text"><strong>Nombres:</strong> <?php echo ($p['nombre1'] . ' ' . $p['nombre2']); ?></p>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <p class="card-text"><strong>Apellidos:</strong> <?php echo ($p['apellido1'] . ' ' . $p['apellido2']); ?></p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <p class="card-text"><strong>Fecha de Nacimiento:</strong> <?php echo ($p['fecha_nac']); ?></p>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <p class="card-text"><strong>Sexo:</strong> <?php echo ($p['sexo']); ?></p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <p class="card-text"><strong>Dirección:</strong> <?php echo ($p['direccion']); ?></p>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <p class="card-text"><strong>Email:</strong> <?php echo ($p['email']); ?></p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Botón de volver -->
            <div class="text-center">
                <a class="btn btn-outline-primary" href="../web/index.php">Volver</a>
            </div>
        </div>
    </div>
</div>
