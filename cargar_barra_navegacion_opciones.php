<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id, nombre, archivo FROM paginas_barra_navegacion");

while ($datos = $sql->fetch()) {
    echo "  <li class='nav-item'>
                 <a class='nav-link' href='" . $datos["archivo"] . "'>". $datos["nombre"] . "</a>
            </li>";
}

?>