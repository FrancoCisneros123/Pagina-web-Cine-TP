<?php
session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion

}

require "redireccion_gerente.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_inicio.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!--Busca las fuentes a utilizar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/estilo_container_padding.css">
    <script src="js/script_inicio.js" defer></script>

    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
</head>

<body>
    <div class="container-fluid" id="container-padding">

        <!--barra de navegacion-->
        <?php require_once "barra_navegacion.php"; ?><br>

        <div class="container">

        <nav class="nav nav-tabs">
            <a class="nav-link link-warning" href="home_gerente.php"><i class="bi bi-film"></i> Peliculas</a>
            <a class="nav-link link-dark active" href="#"><i class="bi bi-clock"></i></i> Funciones</a>
            <a class="nav-link link-warning" href="#"> <i class="bi bi-door-closed"></i></i>Salas</a>
            <a class="nav-link link-warning" href="#"><i class="bi bi-bell"></i> Notificaciones</a>
            <a class="nav-link link-warning" href="#"><i class="bi bi-piggy-bank"></i> Beneficios</a>
        </nav>

        <h1 class="mt-5">Listado de funciones</h1>
        <a href="crear_funcion.php" class="btn btn-primary mt-4 mb-4">Agregar funcion</a>

        <table class="table table-striped table-dark table-hover mt-4 mb-4 text-center">
            <thead>
                <tr>
                    <th scope="col">Funcion</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Pelicula</th>
                    <th scope="col">Dia</th>
                    <th scope="col">Formato</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php require "cargar_funciones_gerente.php" ?>
            </tbody>
        </table>

        </div>

    </div>

    <!--footer-->
    <?php require_once "footer.php"; ?>

</body>

</html>