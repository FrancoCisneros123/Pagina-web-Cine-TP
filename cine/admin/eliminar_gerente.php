<?php
require_once('../conexion.php');

$id = $_GET['id']; // guarda el id

$sql = "DELETE FROM usuario WHERE id_usuario = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$result = $stmt->execute();

if ($result) {
    header("Location: inicio_admin.php");
    exit(); // se asegura que el script se detenga después de la redirección
} else {
    echo "Error al eliminar el usuario";
}
?>