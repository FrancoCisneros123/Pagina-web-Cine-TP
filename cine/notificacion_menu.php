<?php 
use controladores\NotificacionControlador;
session_start();

if (!isset($_SESSION["emailLogin"]))
 { 
    header("location: index.php"); 
    die();
}
use controladores\NoticacionControlador;
require("MVC/controladores/notificacionControlador.php");

$notificacionControlador = new NotificacionControlador();
$notificacionControlador->mostrarNotificaciones();
?>