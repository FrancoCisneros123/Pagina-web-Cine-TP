<?php
use controladores\peliculaControlador;
session_start();

if (!isset($_SESSION["emailLogin"])) { 
    header("location: index.php"); 
    die(); 
}

require("MVC/controladores/permisos.php");
$permisosObj = new Permisos();

if(! $permisosObj->tienePermiso("Agregar nueva película", $_SESSION["id_usuario"])) {
    require ("MVC/vistas/error_permiso.php");
    die();
}
require ("MVC/controladores/peliculaControlador.php");
$pelicula_controlador = new PeliculaControlador();
$pelicula_controlador->nuevaPelicula();
?>
