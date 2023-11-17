<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - Complejos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_inicio.css">
    <link rel="stylesheet" href="css/estilos_paginas_complemento.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!--Busca las fuentes a utilizar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/estilo_container_padding.css">

    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
</head>

<body>
    <div class="container-fluid" id="container-padding">

        <!--barra de navegacion-->
        <?php require_once "barra_navegacion.php"; ?>

    </div>

    <form>
        <div class="container" id="contacto-parrafo">
            <div class="row">
                <h2><b>CONTACTENOS</b></h2>
                <p>Si deseas contactarnos puedes hacerlo en este formulario o en las redes sociales. Envianos tu
                    consulta,
                    sugerencia o reclamo y será respondido a la brevedad posible.</p>

                <p>Recordá que también podes consultar las Preguntas Frecuentes para obtener respuestas inmediatas a los
                    problemas más comunes.</p>

                <div class="col-12 col-sm-6">
                    <b>NOMBRE/s:</b>
                    <input type="text" class="form-control" id="floatingInput" required>
                    <b>APELLIDO:</b>
                    <input type="text" class="form-control" id="floatingInput" required>
                </div>
                <div class="col-12 col-sm-6">
                    <b>EMAIL:</b>
                    <input type="email" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com"
                        required>
                    <b>CELULAR:</b>
                    <input type="number" class="form-control" id="floatingPassword" required>
                </div>
                <div class="col-12 col-sm-6">
                    <b>COMPLEJO</b>
                    <select class="form-select" aria-label="Default select example" required>
                        <option selected>Selecciona una opcion</option>
                        <?php echo require_once "cargar_lista_complejos_opciones.php" ?>
                    </select>

                    <b>ASUNTO</b>
                    <select class="form-select" aria-label="Default select example" required>
                        <option selected>Selecciona una opcion</option>
                        <option value="Promociones">Promociones</option>
                        <option value="Precios">Precios</option>
                        <option value="Compras online">Compras online</option>
                        <option value="Peliculas en cartelera">Peliculas en cartelera</option>
                        <option value="Complejos">Complejos</option>
                        <option value="Reclamos o sugerencias">Reclamos o sugerencias</option>
                        <option value="Otras consultas">Otras consultas</option>
                    </select>
                </div>

                <div class="col-12 col-sm-6">
                    <b>INGRESE SU CONSULTA</b>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"></textarea>
                        <label for="floatingTextarea2">MENSAJE</label>
                    </div>
                </div>

                <div class="col-3">
                    <button type="submit" class="btn btn-outline-warning" id="enviar-contacto">ENVIAR</button>
                </div>
            </div>
        </div>
    </form>

    <!--footer-->
    <?php require_once "footer.php"; ?>

    </div>

</body>

</html>