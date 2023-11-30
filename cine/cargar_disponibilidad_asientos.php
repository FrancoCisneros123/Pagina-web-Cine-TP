<?php

require_once "conexion.php";

$sql = "SELECT asiento FROM sala_asiento_reservado WHERE id_sala  = :id_sala";
$query = $conn->prepare($sql);
$query->bindParam(":id_sala",$_GET["id_sala"]);
$query->execute();

$arrayAsiento = array();

while ($datos = $query->fetch()) {
    $arrayAsiento[] = $datos;
}

echo json_encode($arrayAsiento)

?>