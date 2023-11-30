<?php

require_once "conexion.php";

$busquedaUsuario = "%".$_GET["busquedaUsuario"]."%";

$sql = "SELECT id_pelicula, nombre_pelicula, nombre_imagen FROM pelicula WHERE nombre_pelicula LIKE :busquedaUsuario";
$query = $conn->prepare($sql);
$query->bindParam(":busquedaUsuario", $busquedaUsuario);
$query->execute();

while ($datos = $query->fetch()) {
    echo "
            <div class='col-6 col-xs-6 col-md-6 col-lg-6 col-xl-4'>

                <div class='card card-individual-busqueda'>
                    <img src='" . $datos["nombre_imagen"] . "' class='card-img-top-busqueda imagen-cards'>

                    <div class='card-body'>
                        <h5 class='card-title'>" . $datos["nombre_pelicula"] . "</h5>
                        <a href='pelicula.php?id_pelicula=" . $datos["id_pelicula"] . "' class='stretched-link'></a>
                    </div>

                </div>
            </div>";
}

?>