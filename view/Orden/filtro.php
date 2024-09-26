<?php
    if(mysqli_num_rows($orden)>0){
        foreach($orden as $ord){
            echo "<tr>";
            echo "<td class='text-center'>". ($ord['fecha']) . "</td>";
            echo "<td class='text-center'>".($ord['nombre_doc']) . "</td>";
            echo "<td class='text-center'>". ($ord['orden']) . "</td>";
            
            echo "<td class='text-center'>";
            echo "<a href='".getUrl("Orden","Orden","verDetalle",array("id"=>$ord['id_lab_orden']))."'>";
                    echo '<button class="btn btn-outline-info">Ver 👁</button>';
                echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    }else{
        echo "0";
    }
?>