<?php 
use controladores\NotificacionControlador;

session_start();

if (!isset($_SESSION["emailLogin"])) { 
    header("location: index.php"); 
    die(); 
}

require ("MVC/controladores/notificacionControlador.php");
$pelicula_controlador = new NotificacionControlador();
$pelicula_controlador->nuevaNotificacion();

?>