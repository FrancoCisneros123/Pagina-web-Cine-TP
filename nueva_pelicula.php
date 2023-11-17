<?php
session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion

}
?> 

<?php 
    use controladores\peliculaControlador;
    
    require ("MVC/controladores/peliculaControlador.php");
    $pelicula_controlador = new peliculaControlador();
    $pelicula_controlador->nuevaPelicula();
?>
