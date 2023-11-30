<?php 
use controladores\NotificacionControlador;

session_start();

if (!isset($_SESSION["emailLogin"])) { 
    header("location: index.php"); 
    die(); 
}

require("MVC/controladores/permisos.php");
$permisosObj = new Permisos();

if(! $permisosObj->tienePermiso("Crear notificación", $_SESSION["id_usuario"])) {
    require ("MVC/vistas/error_permiso.php");
    die();
}


require ("MVC/controladores/notificacionControlador.php");
$pelicula_controlador = new NotificacionControlador();
$pelicula_controlador->nuevaNotificacion();

?>