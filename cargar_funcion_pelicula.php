<?php

require_once "conexion.php";

echo "<option value=''>Seleccione una opcion</option>";

$sql = $conn->query("SELECT id_pelicula, nombre_pelicula FROM pelicula");

while ($datos = $sql->fetch()) {
    echo "<option value='$datos[id_pelicula]'>$datos[nombre_pelicula]</option>";
}

?>