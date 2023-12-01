<?php 
session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion

}


require("MVC/controladores/permisos.php");
$permisosObj = new Permisos();

if(! $permisosObj->tienePermiso("Eliminar beneficio", $_SESSION["id_usuario"])) {
    require ("MVC/vistas/error_permiso.php");
    die();
}

if(isset($_GET["id_beneficio"]))
{
    require("conexion.php");
    /** @var \PDO $conn */
    $sql = "SELECT id_beneficio,nombre_beneficio FROM beneficio WHERE id_beneficio = :id_beneficio";
    $query = $conn->prepare($sql);
    $query->bindParam(":id_beneficio", $_GET["id_beneficio"]);
    $query->execute();
    $beneficio_seleccionado = $query->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST["aceptar"]))
    {
        $sql = "DELETE FROM beneficio WHERE id_beneficio = :id_beneficio";
        $query = $conn->prepare($sql);
        $query->bindParam(":id_beneficio", $_GET["id_beneficio"]);
        $query->execute();
        header("location: beneficio_menu.php");
    }
}
?>


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
        if (isset($_GET["id_beneficio"]) && isset($beneficio_seleccionado)) {
            echo '<div class="alert alert-warning"><b>Advertencia. Esta a punto de eliminar el siguiente benefecio: <br><br><ul>';
            echo '<li><b>Id: ' . $beneficio_seleccionado["id_beneficio"] . '</li>';
            echo '<li><b>Titulo: ' . $beneficio_seleccionado["nombre_beneficio"] . '</li>';
        } else 
        {
            echo '<div class="alert alert-danger"><h5>Error.No se ha seleccionado ningun beneficio.<h5></div>';
            // header("location: home_gerente.php");
            // die();

        }

        ?>

        <br></strong>¿Desea continuar?
        <form action="" method="post">
            <button name="aceptar" class="btn btn-danger">Aceptar</button>
            <a href="beneficio_menu.php" class="btn btn-warning">Cancelar</a>
        </form>
    </div>
    <?php require_once "footer.php"; ?>
</body>