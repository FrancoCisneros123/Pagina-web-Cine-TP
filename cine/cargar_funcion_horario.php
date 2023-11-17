<?php

require_once "conexion.php";

echo "<option value=''>Seleccione una opcion</option>";

$sql = $conn->query("SELECT hora FROM horarios");

while ($datos = $sql->fetch()) {
    echo "<option value='$datos[hora]'>$datos[hora]</option>";
}

?>