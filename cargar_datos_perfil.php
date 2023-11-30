<?php

require_once "conexion.php";

$sql = "SELECT email, password, nombre, apellido, nro_telefono, fecha_nacimiento, genero FROM usuario WHERE id_usuario = :id_usuario";
$query = $conn->prepare($sql);
$query->bindParam(":id_usuario", $_SESSION["id_usuario"]);
$query->execute();

$datos = $query->fetch();

?>