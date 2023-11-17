<?php 
session_start();
require_once "informacion_pelicula.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - inicio</title>
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
    <link rel="stylesheet" href="css/estilo_peliculaInfo.css">
    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
    <script src="js/script_pelicula.js" defer></script>
</head>

<body>

    <?php require_once "barra_navegacion.php"; ?>

    <div class="container" id="informacion">
        <div class="row">
            <div>
                <br>
                <img src=<?php echo $datos["nombre_imagen"] ?> width="400" alt="" id="imagen-pelicula"
                    class="img-fluid rounded mx-auto d-block">
            </div>
            <div>
                <form action="comprar_boleto.php" method="post">
                    <br>
                    <h1 id="titulo">
                        <?php echo $datos["nombre_pelicula"] ?>
                    </h1>

                    <input type="hidden" name="nombre_pelicula" id="nombre_pelicula">

                    <div>
                        <div>
                            Seleccione un complejo:
                            <select class="form-select" name="complejo" id="complejo">
                                <option value="">--Seleccione un opción--</option>
                                <?php echo require_once "cargar_lista_complejos_opciones.php" ?>
                            </select>
                        </div>
                        <div>

                            Seleccione el formato:
                            <select class="form-select" name="formato" id="formato">
                                <option value="">--Seleccione un opción--</option>
                                <option value="2D">2D</option>
                                <option value="3D">3D</option>
                            </select>
                        </div>

                        <div>

                            Seleccione el día:

                            <input class="form-control" type="date" name="dia" id="dia">
                        </div>
                        <div>
                            Seleccione el horario:
                            <select class="form-select" name="horario" id="horario">
                                <option value="">--Seleccione un opción--</option>
                                <option value="16:00hs">16:00hs</option>
                                <option value="20:00hs">20:00hs</option>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" name="id_pelicula" id="id_pelicula" value="<?php echo $_GET["id_pelicula"] ?>">
                    <input type="hidden" name="nombre_imagen" id="nombre_imagen" value="<?php echo $datos["nombre_imagen"] ?>">
                    <input type="hidden" name="nombre_pelicula" id="nombre_pelicula" value="<?php echo $datos["nombre_pelicula"] ?>">

                    <br><button type="submit" class="btn btn-danger" name="comprar" id="comprar" disabled>Comprar entradas</button>
                </form>
            </div>

        </div>

        <br>
        <h1 class="fw-bold">Sinopsis:</h1>
        <div class="container">
            <?php echo $datos["sinopsis"] ?>
        </div>

        <br>
        <h1 class="fw-bold">Datos:</h1>
        <div class="container">
            <div class="row">
                <ul>
                    <div class="col-3">
                        <li>Género:
                            <?php echo $datos["genero"] ?>
                        </li>
                        <li>Formatos:
                            <?php echo $datos["formatos"] ?>
                        </li>
                    </div>

                    <div class="col-3">
                        <li>Idiomas:
                            <?php echo $datos["idiomas"] ?>
                        </li>
                        <li>Duración:
                            <?php echo $datos["duracion"] ?>
                        </li>
                    </div>
                </ul>
            </div>
        </div>


    </div>

    <?php require_once "footer.php"; ?>

</body>