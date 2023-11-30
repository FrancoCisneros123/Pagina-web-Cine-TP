<?php
use controladores\PeliculaControlador; 

session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion
}

require("MVC/controladores/permisos.php");
$permisosObj = new Permisos();

if(! $permisosObj->tienePermiso("Eliminar película", $_SESSION["id_usuario"])) {
    require ("MVC/vistas/error_permiso.php");
    die();
}


require("MVC/controladores/peliculaControlador.php");

$peliculaControlador = new PeliculaControlador();
$peliculaControlador->mostrarEliminarPelicula();

?>

