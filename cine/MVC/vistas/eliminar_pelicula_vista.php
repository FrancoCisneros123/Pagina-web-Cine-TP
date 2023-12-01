<?php
require("../controladores/permisos.php");
$permisosObj = new Permisos();

if (!$permisosObj->tienePermiso("Eliminar pelicula", $_SESSION["id_usuario"])) {
    require("error_permiso.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - Inicio</title>
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
    <script src="js/script_inicio.js" defer></script>

    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
</head>

<body>
    <?php require_once("barra_navegacion.php") ?>
    <h2>Eliminar pelicula</h2>
    <div class="container">
    <?php
        if (isset($_GET["id_pelicula"]) && isset($peliculaSeleccionada)) {
            echo '<div class="alert alert-warning"><b>Advertencia. Esta a punto de eliminar la siguiente pelicula: <br><br><ul>';
            echo '<li><b>Nombre: ' . $peliculaSeleccionada["nombre_pelicula"] . '</li>';
            echo '<li><b>Duracion: ' . $peliculaSeleccionada["duracion"] . '</li>';
            echo '<li><b>Fecha de estreno: ' . $peliculaSeleccionada["fecha_estreno"] . '</li>';
            echo '<li><b>Fecha de baja: ' . $peliculaSeleccionada["fecha_baja"] . '</li>';
            echo '<li><b>Nombre de la imagen: ' . $peliculaSeleccionada["nombre_imagen"] . '</li>';
            echo '<li><b>Géneros: ' . $peliculaSeleccionada["genero"] . '</li>';
            echo '<li><b>Formatos: ' . $peliculaSeleccionada["formatos"] . '</li></ul></div>';
        } else 
        {
            echo '<div class="alert alert-danger"><h5>Error.No se ha seleccionado ninguna pelicula.<h5></div>';
            // header("location: home_gerente.php");
            // die();

        }

        ?>

        <br></strong>¿Desea continuar?
        <form action="" method="post">
            <button name="aceptar" class="btn btn-danger">Aceptar</button>
            <a href="home_gerente.php" class="btn btn-warning">Cancelar</a>
        </form>
    </div>
    <?php require_once "footer.php"; ?>
</body>