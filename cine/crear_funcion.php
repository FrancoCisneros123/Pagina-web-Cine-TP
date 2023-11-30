<?php
session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion

}

require("MVC/controladores/permisos.php");
$permisosObj = new Permisos();

if(! $permisosObj->tienePermiso("Crear nueva función", $_SESSION["id_usuario"])) {
    require ("MVC/vistas/error_permiso.php");
    die();
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

    <link rel="stylesheet" href="css/estilo_container_padding.css">
    <link rel="stylesheet" href="css/estilo_funcion.css">

    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
    <script src="js/script_funcion.js" defer></script>
</head>

<body>
    <div class="container-fluid" id="container-padding">

        <!--barra de navegacion-->
        <?php require_once "barra_navegacion.php"; ?>

        <!--crear funcion-->
        <div class="container" id="funcion_crear">
            <h1>Crear funcion</h1>

            <form action="crear_funcion_confirmacion.php" method="post">

                <!--Datos cargados con AJAX-->
                <div class="mb-3">
                    <label for="horario_entrada" class="form-label">Horario</label>
                    <select id="horario_entrada" name="horario_entrada" class="form-select"></select>
                </div>

                <div class="mb-3">
                    <label for="sala" class="form-label">Sala </label>
                    <select id="sala" name="sala" class="form-select"></select>
                </div>

                <div class="mb-3">
                    <label for="pelicula" class="form-label">Pelicula </label>
                    <select id="pelicula" name="pelicula" class="form-select"></select>
                </div>

                <div class="mb-3">
                    <label for="dia" class="form-label">Dia</label>
                    <input type="date" name="dia" id="dia" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="formato" class="form-label">Formato</label>
                    <select id="formato" name="formato" class="form-select"></select>
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary" name="crear" id="crear" disabled>Crear funcion</button>
                </div>
            </form>
        </div>

        <!--footer-->
        <?php require_once "footer.php"; ?>

</body>

</html>