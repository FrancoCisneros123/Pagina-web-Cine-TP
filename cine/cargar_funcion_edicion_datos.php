<?php

require_once "conexion.php";

$sql = "SELECT horario_entrada, id_sala, id_pelicula, id_formato FROM funcion WHERE id_funcion = :id_funcion ";
$query = $conn->prepare($sql);
$query->bindParam(":id_funcion", $_GET["id_funcion"]);
$query->execute();
$datos = $query->fetch();

$horario_entrada = $datos["horario_entrada"];
$id_sala = $datos["id_sala"];
$id_pelicula = $datos["id_pelicula"];
$id_formato = $datos["id_formato"];

//pelicula
$sql = "SELECT nombre_pelicula FROM pelicula WHERE id_pelicula = :id_pelicula ";
$query = $conn->prepare($sql);
$query->bindParam(":id_pelicula", $id_sala);
$query->execute();
$datos = $query->fetch();

$nombre_pelicula = $datos["nombre_pelicula"];

//formato
$sql = "SELECT nombre_formato FROM formato WHERE id_formato = :id_formato";
$query = $conn->prepare($sql);
$query->bindParam(":id_formato", $id_formato);
$query->execute();
$datos = $query->fetch();

$nombre_formato = $datos["nombre_formato"];

?>