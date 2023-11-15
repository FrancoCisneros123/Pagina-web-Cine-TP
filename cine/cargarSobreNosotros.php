<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id, nombre, archivo FROM sobre_nosotros");

while ($datos = $sql->fetch()) {
    echo " <div class='mb-2'>
                <a class='text-secondary text-decoration-none' href='" . $datos["archivo"] . "'>" . $datos["nombre"] . "</a>
            </div>";
}
?>