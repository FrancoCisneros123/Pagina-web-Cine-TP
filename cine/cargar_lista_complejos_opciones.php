<?php

require_once "conexion.php";

$sql = $conn->query("SELECT id_complejo, nombre_complejo FROM complejo");

while ($opciones = $sql->fetch()) {
    echo "  
    <option value=". $opciones["nombre_complejo"] . ">". $opciones["nombre_complejo"] . "</option>";
}

?>