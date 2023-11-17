<?php

require_once "conexion.php";

$sql = $conn->query("SELECT nombre_formato FROM formato");

while ($datos = $sql->fetch()) {
    echo "<option value='$datos[nombre_formato]'>$datos[nombre_formato]</option>";
}

?>