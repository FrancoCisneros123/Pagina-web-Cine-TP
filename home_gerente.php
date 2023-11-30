<?php 
session_start();

if (!isset($_SESSION["emailLogin"]))
 { 
    header("location: index.php"); 
    die(); 
}
use controladores\PeliculaControlador;
require("MVC/controladores/peliculaControlador.php");

$peliculaControlador = new PeliculaControlador();
$peliculaControlador->mostrarListaPeliculas();
?>