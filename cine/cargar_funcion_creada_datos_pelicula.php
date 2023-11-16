<?php

require_once "conexion.php";

$sql = "SELECT nombre_pelicula, nombre_imagen FROM pelicula WHERE id_pelicula = :pelicula";
$query = $conn->prepare($sql);
$query->bindParam(":pelicula", $_POST["pelicula"]);
$query->execute();
$datos = $query->fetch();

$pelicula = $datos["nombre_pelicula"];
$pelicula_imagen = $datos["nombre_imagen"];

?>