<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id_formato, nombre_formato FROM formato");

while ($datos = $sql->fetch()) {
    echo "<option value='$datos[id_formato]'>$datos[nombre_formato]</option>";
}

?>