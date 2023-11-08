<?php

require_once "conexion.php";

$id_pelicula = $_GET["id_pelicula"];

$sql = $conn->prepare("SELECT nombre_pelicula, duracion, fecha_estreno, fecha_baja, nombre_imagen, sinopsis, genero, formatos, idiomas FROM pelicula WHERE id_pelicula=?");
$sql->execute([$id_pelicula]);

$datos = $sql->fetch();

?>