<body>
    <div class="container">
        <h1 class="text-center">Órdenes de Laboratorio</h1>
        <input type="text" name="filtro" id="filtro" placeholder="Buscar..." class="form-control mb-3">
        
        <table class="table table-hover table-striped border-0">
            <thead>
                <tr>
                    <th class="text-center">Fecha de la Orden</th>
                    <th class="text-center">Documento de la Orden</th>
                    <th class="text-center">Número de la Orden</th>
                    <th class="text-center">Detalle de la Orden</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($orden as $ord){
                        echo "<tr>";
                        echo "<td class='text-center'>". ($ord['fecha']) . "</td>";
                        echo "<td class='text-center'>".($ord['nombre']) . "</td>";
                        echo "<td class='text-center'>". ($ord['orden']) . "</td>";
                        
                        echo "<td class='text-center'>";
                            echo "<a href='consult.php?id=".$ord['id_lab_orden']."'>";
                                echo '<button class="btn btn-outline-info">Ver 👁</button>';
                            echo "</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="../../web/js/jquery.js"></script>
    <script src="../../web/js/global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
