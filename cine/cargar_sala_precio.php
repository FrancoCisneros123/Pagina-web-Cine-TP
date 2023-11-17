<?php

require_once "conexion.php";

$sql = $conn->query("SELECT nombre, precio FROM sala_precio");

while ($datos = $sql->fetch()) {

    echo
        "<tr>
            <td>" . $datos["nombre"] . "</td>
            <td> $" . $datos["precio"] . "</td>
        </tr>";

}

?>