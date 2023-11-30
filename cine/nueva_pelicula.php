<?php
use controladores\peliculaControlador;
session_start();

if (!isset($_SESSION["emailLogin"])) { 
    header("location: index.php"); 
    die(); 
}

require ("MVC/controladores/peliculaControlador.php");
$pelicula_controlador = new PeliculaControlador();
$pelicula_controlador->nuevaPelicula();
?>
