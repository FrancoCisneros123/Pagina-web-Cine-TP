<?php

require_once "conexion.php";

//opcion por defecto
echo "<option value='' selected>--Seleccione una opción--</option>";

$sql = "SELECT id_sala FROM funcion WHERE id_pelicula = :id_pelicula";
$query = $conn->prepare($sql);
$query->bindParam(":id_pelicula", $_GET["id_pelicula"]);
$query->execute();

while ($datos = $query->fetch()) {
    echo "<option value='$datos[id_sala]'>$datos[id_sala]</option>";
}

?>