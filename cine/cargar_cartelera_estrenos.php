<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id_pelicula, nombre_pelicula, nombre_imagen FROM pelicula WHERE esEstreno='si'");

while ($datos = $sql->fetch()) {
    echo "
            <div class='col-12 col-xs-12 col-md-6 col-lg-6 col-xl-4'>

                <div class='card card-individual-estreno'>
                    <img src='" . $datos["nombre_imagen"] . "' class='card-img-top'>

                    <div class='card-body'>
                        <h5 class='card-title'>" . $datos["nombre_pelicula"] . "</h5>
                        <a href='#' class='stretched-link'></a>
                    </div>

                </div>
            </div>";
}
?>