<?php

require_once "conexion.php";

//opcion por defecto
echo "<option value='' selected>--Seleccione una opción--</option>";

$sql = "SELECT nombre_formato FROM formato";
$query = $conn->prepare($sql);
$query->execute();

while ($datosFormato = $query->fetch()) {
    echo "<option value='$datosFormato[nombre_formato]'>$datosFormato[nombre_formato]</option>";
}

?>