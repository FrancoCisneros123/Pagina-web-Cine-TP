<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id_complejo, nombre_complejo, nombre_imagen FROM complejo");

while ($datos = $sql->fetch()) {
    echo "  
    <div class='col-6'>
        <div class='card card-individual-complejo'>
            <img src=" . $datos["nombre_imagen"] . " class='card-img-top'>

            <div class='card-body' style='background-color: black'>
                <h5 class='card-title' style='color: white;'>" . $datos["nombre_complejo"] . "</h5>
                <a href=complejo_detalle.php?id_complejo=" . $datos["id_complejo"] . " class='stretched-link'></a>
            </div>

        </div>
    </div>";
}

?>