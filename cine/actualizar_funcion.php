<?php

require_once "conexion.php";

$sql = "UPDATE funcion SET horario_entrada = :horario_entrada, id_sala  = :sala, id_pelicula  = :pelicula, dia  = :dia, formato  = :formato WHERE id_funcion = :id_funcion ";

$query = $conn->prepare($sql);
$query->bindParam(":horario_entrada", $_POST["horario_entrada"]);
$query->bindParam(":sala", $_POST["sala"]);
$query->bindParam(":pelicula", $_POST["pelicula"]);
$query->bindParam(":dia", $_POST["dia"]);
$query->bindParam(":formato", $_POST["formato"]);
$query->bindParam(":id_funcion", $_POST["id_funcion"]);
$query->execute();

?>