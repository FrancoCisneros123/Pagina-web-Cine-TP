<?php 

use controladores\NotificacionControlador;
session_start();

if (!isset($_SESSION["emailLogin"])) { 
    header("location: index.php"); 
    die(); 
}


require("MVC/controladores/notificacionControlador.php");

$notificacionControlador = new NotificacionControlador();
$notificacionControlador->actualizarNotificacion();
?>