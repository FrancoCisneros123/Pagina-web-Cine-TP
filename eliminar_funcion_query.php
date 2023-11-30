<?php

require_once "conexion.php";

$sql = "DELETE FROM funcion WHERE id_funcion=:id_funcion";
$query = $conn->prepare($sql);
$query->bindParam(":id_funcion", $_POST["id_funcion"]);
$query->execute();

?>