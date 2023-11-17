<?php

require_once "conexion.php";

//opcion por defecto
echo "<option value='' selected>--Seleccione una opción--</option>";

$sql = "SELECT id_formato, nombre_formato FROM formato";
$query = $conn->prepare($sql);
$query->execute();

while ($datosFormato = $query->fetch()) {
    echo "<option value='$datosFormato[id_formato]'>$datosFormato[nombre_formato]</option>";
}

?>