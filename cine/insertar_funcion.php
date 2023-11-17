<?php

require_once "conexion.php";

$sql = "INSERT INTO funcion (horario_entrada, id_sala , id_pelicula , dia, formato)
VALUES (:horario_entrada,:sala, :pelicula, :dia, :formato)";

$query = $conn->prepare($sql);
$query->bindParam(":horario_entrada", $_POST["horario_entrada"]);
$query->bindParam(":sala", $_POST["sala"]);
$query->bindParam(":pelicula", $_POST["pelicula"]);
$query->bindParam(":dia", $_POST["dia"]);
$query->bindParam(":formato", $_POST["formato"]);
$query->execute();

?>