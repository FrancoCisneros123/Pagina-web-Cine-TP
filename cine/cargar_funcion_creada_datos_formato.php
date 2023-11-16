<?php

require_once "conexion.php";

$sql = "SELECT nombre_formato FROM formato WHERE id_formato = :formato";
$query = $conn->prepare($sql);
$query->bindParam(":formato", $_POST["formato"]);
$query->execute();
$datos = $query->fetch();

$formato = $datos["nombre_formato"];

?>