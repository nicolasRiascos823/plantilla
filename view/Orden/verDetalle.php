<body>
    <div class="container">
                    <?php
                    foreach($detalle as $deta){?>
        <h1>Nombre del Grupo( <strong><?php echo $deta['nombre_grupo']; ?> )</strong></h1>
        <p>Procedimiento: <strong><?php echo $deta['nombre_cups']; ?></p>
        
        
        <!-- Contenedor vacío para separar la tabla -->

        <div class="container mt-5">
            <?php
                foreach($informacion as $info){?>
                    <div class="card mb-4 p-3">
                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <p>Paciente: <?= $info['nombre1']." ".$info['nombre2']." ".$info['apellido1'] ?> </p>
                                <p>Telefono: </p>
                            </div>
                            <div class="col-md-3 mb-4">
                                <p>Identificacion: </p>
                                <p>Medico: </p>
                            </div>
                            <div class="col-md-3 mb-4">
                                <p>Sexo: </p>
                                <p>Fecha Orden: </p>
                            </div>
                            <div class="col-md-3 mb-4">
                                <p>Administrador De Salud: </p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
        </div>


        <table class="table table-hover table-striped border-0">
            <thead>
                <tr>
                    <th class="text-center">Código de la Prueba</th>
                    <th class="text-center">Nombre de la Prueba</th>
                    <th class="text-center">Resultado</th>
                    <th class="text-center">Valores de Referencia</th>
                    <th class="text-center">Unidad</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        echo "<tr>";
                        echo "<td class='text-center'>".($deta['ID_ORDEN_RESULTADOS']) . "</td>";
                        echo "<td class='text-center'>".($deta['nombre_prueba']) . "</td>";
                        echo "<td class='text-center'>". ($deta['nombre']) . "</td>";
                        echo "<td class='text-center'>". ($deta['valor_ref_max_f']) . "</td>";
                        echo "<td class='text-center'>". ($deta['unidad']) . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <div class="text-center" style="margin-top: 30px;">
                <a class="btn btn-outline-primary" href="../web/index.php">Volver</a>
        </div>
    </div>

    <style>
        table {
            border: none; /* Quitar bordes externos */
        }
        th, td {
            border: none; /* Quitar bordes internos */
        }
    </style>
</body>
</html>

