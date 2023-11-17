<?php
session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion
}

require_once("conexion.php");
$queryPelicula = $conn->prepare("SELECT * FROM pelicula WHERE id_pelicula = :id_pelicula");
$queryPelicula->bindParam(':id_pelicula', $_GET["id_pelicula"]);
$queryPelicula->execute();
$queryPelicula = $queryPelicula->fetch(PDO::FETCH_ASSOC);

?>

<?php
if (isset($_POST["aceptar"])) {
    require_once("conexion.php");
    $queryPelicula = $conn->prepare("DELETE FROM pelicula WHERE id_pelicula = :id_pelicula");
    $queryPelicula->bindParam(':id_pelicula', $_GET["id_pelicula"]);
    $resultado = $queryPelicula->execute();

    
    $conn = null;
    $resultado = false;
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
        if (!isset($_POST["aceptar"])) {
            echo 'Esta a punto de eliminar la siguiente pelicula: <br>';
            echo '<p><strong>Nombre: ' . $queryPelicula["nombre_pelicula"] . '<p>';
            echo '<p><strong>Duracion: ' . $queryPelicula["duracion"] . '<p>';
            echo '<p><strong>Fecha de estreno: ' . $queryPelicula["fecha_estreno"] . '<p>';
            echo '<p><strong>Fecha de baja: ' . $queryPelicula["fecha_baja"] . '<p>';
            echo '<p><strong>Nombre de la imagen: ' . $queryPelicula["nombre_imagen"] . '<p>';
            echo '<p><strong>Géneros: ' . $queryPelicula["genero"] . '<p>';
            echo '<p><strong>Formatos: ' . $queryPelicula["formatos"] . '<p>';
            $conn=null;
        } else {
            header("location: home_gerente.php");
            die();

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