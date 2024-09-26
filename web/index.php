<?php

    include_once '../lib/helpers.php';
    if(!isset($_SESSION['auth'])){
        redirect("login.php");
    }
    include_once '../view/partials/header.php';
    echo "<body>";
        echo "<div class='wrapper'>";
            include_once '../view/partials/sidebar.php';
                echo "<div class='main-panel'>";
                    include_once '../view/partials/navbar.php';
                    echo "<div class='container'>";
                        echo "<div class='page-inner'>";
                            if(isset($_GET['modulo'])){
                                resolve();
                            }else if(isset($_SESSION['auth'])){
                                redirect(getUrl("Orden","Orden","getOrden_lab"));
                            }
                           
                        echo "</div>";
                    echo "</div>";
                    include_once '../view/partials/footer.php';
                echo "</div>";
        echo "</div>";
        include_once '../view/partials/scripts.php';
    echo "</body>";
    echo "</html>";

?>