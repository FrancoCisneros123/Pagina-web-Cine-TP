<?php

require_once "conexion.php";

$id_complejo = $_GET["id_complejo"];

$sql = $conn->prepare("SELECT nombre_complejo, direccion, descripcion, direccion_maps FROM complejo WHERE id_complejo=?");
$sql->execute([$id_complejo]);

$datos = $sql->fetch();
?>