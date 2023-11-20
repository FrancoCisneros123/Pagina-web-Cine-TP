<?php
require_once('../conexion.php');

$queryString = "SELECT * FROM usuario where id_tipo_usuario = 3";

/** @var \PDO $conn */
$sql = $conn->prepare($queryString);
$sql->execute();
$usuario = $sql->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo json_encode($usuario);
?>