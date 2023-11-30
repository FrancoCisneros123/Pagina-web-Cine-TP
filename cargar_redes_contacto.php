<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id, nombre, link FROM contacto_redes");

while ($datos = $sql->fetch()) {
    echo " <div class='mb-2'>
                <a class='text-secondary text-decoration-none' href='". $datos["link"] ."'>" . $datos["nombre"] . "</a>
            </div>";
}
?>