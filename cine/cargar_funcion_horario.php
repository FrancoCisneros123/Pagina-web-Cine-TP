<?php

require_once "conexion.php";

$sql = $conn->query("SELECT hora FROM horarios");

while ($datos = $sql->fetch()) {
    echo "<option value='$datos[hora]'>$datos[hora]</option>";
}

?>