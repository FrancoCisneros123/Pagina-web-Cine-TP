<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id_pelicula, nombre_imagen FROM pelicula WHERE esEstreno='no'");

while ($datos = $sql->fetch()) {
    echo "
        <div class='col-6 col-xs-6 col-md-6 col-lg-6 col-xl-3'>
            <div class='card card-individual'>
                <img src='" . $datos["nombre_imagen"] . "' class='card-img-top'>
                <a href='pelicula.php?id_pelicula=" . $datos["id_pelicula"] . "' class='stretched-link'></a>
            </div>
        </div>";
}
?>