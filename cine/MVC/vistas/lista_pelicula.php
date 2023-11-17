<?php
session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion
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
    <br>
    <div class="container">
        <h2>Listado de peliculas</h2>
        <a href="nueva_pelicula.php" class="btn btn-primary">Agregar nueva pelicula</a>
        <a href="gerente_funciones.php" class="btn btn-danger">Ver funciones</a><br>
        <br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Fecha de estreno</th>
                    <th>Fecha de baja</th>
                    <!-- <th></th> -->
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    if (!empty($peliculas_query)) {
                        foreach ($peliculas_query as $pelicula) {                            
                            echo "<tr>";
                            echo '<td name="id">' . $pelicula["id_pelicula"] . "</td>";
                            echo "<td>" . $pelicula["nombre_pelicula"] . "</td>";
                            echo "<td>" . $pelicula["fecha_estreno"] . "</td>";
                            echo "<td>" . $pelicula["fecha_baja"] . "</td>";
                            // echo "<td>" . '<a href="#">' . "Ver funciones" . "</a>" . "</td>";
                            echo "<td>" . '<a href="actualizar_pelicula.php?id_pelicula='.$pelicula["id_pelicula"].'" class="btn btn-outline-success">Editar</a></td>';
                            echo "<td>" . '<a href="eliminar_pelicula.php?id_pelicula='.$pelicula["id_pelicula"].'" class="btn btn-outline-danger">Eliminar</a></td>';
                            echo "</tr>";
                        }
                    } else
                        echo '<div class="alert-danger">No se ha encontrado ninguna pelicula.</div>'

                    ?>

                </tbody>
            </table>
        </div>
        <br>
    <?php require_once "footer.php"; ?>
</body>

</html>