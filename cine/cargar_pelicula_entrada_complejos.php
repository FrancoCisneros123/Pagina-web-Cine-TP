<?php

require_once "conexion.php";

//opcion por defecto
echo "<option value='' selected>--Seleccione una opción--</option>";

$sql = $conn->query("SELECT id_complejo, nombre_complejo FROM complejo");

while ($opciones = $sql->fetch()) {
    echo "  
    <option value=" . $opciones["nombre_complejo"] . ">" . $opciones["nombre_complejo"] . "</option>";
}

?>