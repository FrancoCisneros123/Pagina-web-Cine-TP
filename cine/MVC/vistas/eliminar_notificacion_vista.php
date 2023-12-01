<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - Eliminar notificacion</title>
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
    <h2>Eliminar notificacion</h2>
    <div class="container">
    <?php
        if (isset($_GET["id_notificacion"]) && isset($notificacionSeleccionada)) {
            echo '<div class="alert alert-warning"><b>Advertencia. Esta a punto de eliminar la siguiente notificacion: <br><br><ul>';
            echo '<li><b>Id: ' . $notificacionSeleccionada["id_notificacion"] . '</li>';
            echo '<li><b>Titulo: ' . $notificacionSeleccionada["nombre_notificacion"] . '</li>';
        } else 
        {
            echo '<div class="alert alert-danger"><h5>Error.No se ha seleccionado ninguna notificacion.<h5></div>';
            // header("location: home_gerente.php");
            // die();

        }

        ?>

        <br></strong>¿Desea continuar?
        <form action="" method="post">
            <button name="aceptar" class="btn btn-danger">Aceptar</button>
            <a href="notificacion_menu.php" class="btn btn-warning">Cancelar</a>
        </form>
    </div>
    <?php require_once "footer.php"; ?>
</body>