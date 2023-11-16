<?php

require_once "conexion.php";

$sql = "INSERT INTO funcion (horario_entrada, id_sala , id_pelicula , id_formato)
VALUES (:horario_entrada,:sala, :pelicula, :formato)";

$query = $conn->prepare($sql);
$query->bindParam(":horario_entrada", $_POST["horario_entrada"]);
$query->bindParam(":sala", $_POST["sala"]);
$query->bindParam(":pelicula", $_POST["pelicula"]);
$query->bindParam(":formato", $_POST["formato"]);
$query->execute();

?>