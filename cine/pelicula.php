<?php require_once "informacion_pelicula.php"; ?>

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
</head>

<body>

     <!--barra de navegacion-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark border-3 border-bottom border-danger">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img class="img-thumbnail" src="imagenes/logo_inicio_opcion2.jpeg" alt="CINE EN CARTELERA"
                    id="logonav">
                <!--logo en el extremo superior izquierdo-->
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="MenuNavegacion" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">CARTELERA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="complejos.html">COMPLEJOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="precios.html">PRECIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">CONTACTO</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <!--etiqueta de boostrap 5 que coloca elementos en el lugar derecho (en este caso la lupa)-->
                    <li class="nav-item" id="busqueda">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Ingresa tu busqueda"
                                aria-label="Search">
                            <button class="btn btn-outline-warning" type="submit">Buscar</button>
                        </form>
                    </li>

                    <!--boton de inicio de sesion-->
                    <li class="nav-item" id="inicar-sesion">
                        <form class="d-flex">
                            <a href="index.html" class="btn btn-outline-success" type="submit">Iniciar sesion</a>
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="informacion">
        <div class="row">
            <div>
                <br>
                <img src=<?php echo $datos["nombre_imagen"] ?> width="400" alt="" id="imagen-pelicula"
                    class="img-fluid rounded mx-auto d-block">
            </div>
            <div>
                <form action="sala.html">
                    <br>
                    <h1 id="titulo">
                        <?php echo $datos["nombre_pelicula"] ?>
                    </h1>
                    <div>
                        <div>
                            Seleccione un complejo:
                            <select class="form-select" name="" id="">
                                <option value="">--Seleccione un opción--</option>
                                <option value="">Canning</option>
                                <option value="">Madero</option>
                                <option value="">Lomas</option>
                            </select>
                        </div>
                        <div>


                            Seleccione el formato:
                            <select class="form-select" name="" id="">
                                <option value="">--Seleccione un opción--</option>
                                <option value="">2D</option>
                                <option value="">3D</option>
                            </select>
                        </div>

                        <div>

                            Seleccione el día:

                            <input class="form-control" type="date">
                        </div>
                        <div>
                            Seleccione el horario:
                            <select class="form-select" name="" id="">
                                <option value="">--Seleccione un opción--</option>
                                <option value="">16:00hs</option>
                                <option value="">20:00hs</option>
                            </select>
                        </div>
                    </div>

                    <br><button type="submit" class="btn btn-danger">Comprar entradas</button>
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

    <!--footer-->
    <footer class="container-fluid">
        <div class="row p-5 pb-2 bg-dark text-white">

            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h3">CINE EN CARTELERA</p>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">

                <p class="h5 mb-5">SOBRE NOSOTROS</p>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Informacion general</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="terminos.html">Terminos y condiciones</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Politica de privacidad</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="preguntasfrecuentes.html">Preguntas
                        frecuentes</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="inicio.html">Cartelera</a>
                </div>

            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h5 mb-5">COMPLEJOS</p>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="complejo_canning.html">Canning</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="complejo_puerto.html">Madero</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="complejo_lomas.html">Lomas de zamora</a>
                </div>

            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h5 mb-5">CONTACTO</p>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Whatsapp: +54 11 3957-3564</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Instagram: cine_en_cartelera_ok</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">X: cine_en_cartelera_x</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Tik-tok: cine_en_cartelera_tt</a>
                </div>

                <div class="mb-2">
                    <a class="text-secondary text-decoration-none" href="">Mail: cineencartelera@gmail.com</a>
                </div>

            </div>

            <div class="col-xs-12 pt-4">
                <!--pt = padding top 4-->
                <p class="text-white text-center">Copyright - todos los derechos reservados © 2023</p>
            </div>
        </div>
    </footer>

</body>