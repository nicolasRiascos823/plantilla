<style>
        .page-item {
            margin: 0 5px;
            cursor: pointer;
        }
        .active {
            background-color: #007bff;
            color: white;
        }
    </style>
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            <h1 class="display-5 ">Órdenes de Laboratorio</h1>
                <div class="row">
                    <div class="form-group  col-md-3">
                        <h6 class="mt-3">Numero De Orden</h6>
                        <input type="text" name="filtro" id="filtro" placeholder="Buscar..." class="form-control" data-url="<?=getUrl("Orden","Orden","filtro",false,"ajax");?> ">
                    </div>
                    <div class="form-group col-md-2">
                        <h6 class="mt-3">Ordenamiento</h6>

                        <select name="orden" id="orden" class="form-control" data-url="<?=getUrl("Orden","Orden","ordenamiento",false,"ajax");?> ">
                            <option value="desc">Desc</option>
                            <option value="asc">Asc</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <h6 class="mt-3">Fecha Inicio</h6>
                        <input type="date" name="fechaInicio" id="fechaInicio" class="form-control" >
                    </div>
                    <div class="form-group col-md-2">
                        <h6 class="mt-3">Fecha fin</h6>
                        <input type="date" name="fechaFin" id="fechaFin" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <h6 class="mt-3 text-white">boton</h6>
                        <button type="button" class="btn btn-primary" id="consultar" data-url="<?=getUrl("Orden","Orden","filtroFecha",false,"ajax");?>">Consultar</button>
                    </div>
                </div>
            <div class="info d-none mt-5"></div>
            <table class="table table-hover table-striped" id="myTable" style="margin-top: 30px;">
                <thead>
                    <tr>
                        <th class="text-center">Fecha de la Orden</th>
                        <th class="text-center">Documento de la Orden</th>
                        <th class="text-center">Número de la Orden</th>
                        <th class="text-center">Detalle de la Orden</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <?php
                        foreach($orden as $ord){
                            echo "<tr>";
                            echo "<td class='text-center'>". ($ord['fecha']) . "</td>";
                            echo "<td class='text-center'>".($ord['nombre_doc']) . "</td>";
                            echo "<td class='text-center'>". ($ord['id_lab_orden']) . "</td>";
                            
                            echo "<td class='text-center'>";
                            echo "<a href='".getUrl("Orden","Orden","verDetalle",array("id"=>$ord['id_lab_orden']))."'>";
                                    echo '<button class="btn btn-outline-info">Ver 👁</button>';
                                echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <nav id="pagination" class="d-flex justify-content-center"></nav>
        </div>
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
