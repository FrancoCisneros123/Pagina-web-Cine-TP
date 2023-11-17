<?php 
    require("conexion.php");

    $peliculas_query = $conn->query("SELECT id_pelicula,nombre_pelicula,fecha_estreno,fecha_baja FROM pelicula");
    $conn = null;

    require("MVC/vistas/lista_pelicula.php");
?>