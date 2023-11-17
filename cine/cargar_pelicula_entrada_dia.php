<?php

require_once "conexion.php";

//opcion por defecto
echo "<option value='' selected>--Seleccione una opción--</option>";

$sql = "SELECT dia FROM funcion WHERE id_pelicula = :id_pelicula";
$query = $conn->prepare($sql);
$query->bindParam(":id_pelicula", $_GET["id_pelicula"]);
$query->execute();

while ($datosDia = $query->fetch()) {
    echo "<option value='$datosDia[dia]'>$datosDia[dia]</option>";
}

?>