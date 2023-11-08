<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id_complejo, nombre_complejo FROM complejo");

while ($datos = $sql->fetch()) {
    echo "  
    <div class='mb-2'>
        <a class='text-secondary text-decoration-none' href=complejo_detalle.php?id_complejo=" . $datos["id_complejo"] . ">" . $datos["nombre_complejo"] . "</a>
    </div>";
}

?>