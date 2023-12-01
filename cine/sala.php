<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_sala.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!--Busca las fuentes a utilizar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="js/script_sala.js" defer></script>
    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
</head>

<body>

    <!--barra de navegacion-->
    <?php require_once "barra_navegacion.php"; ?>

    <input type="hidden" name="id_sala" id="id_sala" value="<?php echo $_POST["sala"]?>">

    <div class="container">

        <h1>Disponibilidad de la sala</h1>



        <!--asientos---->
        <div class="cine">

            <div class="row">

                <!--parte izquierda con sus asientos-->
                <div class="col-12 col-xs-6 col-md-6 col-lg-6 ">
                    <div class="cine-asientos izquierda" id="cine-asientos-izquierda">
                        <?php include "generar_sala_fila_izquierda.php" ?>;
                    </div>
                </div>

                <!--parte derecha con sus asientos-->
                <div class="col-12 col-xs-6 col-md-6 col-lg-6">
                    <div class="cine-asientos derecha" id="cine-asientos-derecha">
                        <?php include "generar_sala_fila_derecha.php" ?>;
                    </div>
                </div>

            </div>

        </div>

        <!--Referencias-->
        <h2>Referencias</h2>

        <div class="referencias">

            <p class="parrafo-referencia me-2">Libre</p>
            <div class="asiento ejemplo asiento-libre asiento-libre-ejemplo me-4"></div>

            <p class="parrafo-referencia me-2">Ocupado</p>
            <div class="asiento ejemplo asiento-ocupado asiento-ocupado-ejemplo me-4"></div>

        </div>

        <!--reserva-->
        <div class="reserva">

            <h2>Reserva</h2>

            <div class="row align-items-center">

                <div class="col-auto">
                    <button class="btn btn-success col-auto" id="reservar">Reservar asiento</button>
                </div>
            </div>


            <!--datos del ticket-->
            <form action="ticket.php" method="post">

                <input type="hidden" name="cantidad_boletos" id="cantidad_boletos"
                    value=<?php echo $_POST["cantidad_boletos"] ?>>
                <input type="hidden" name="precio_unitario" id="precio_unitario"
                    value=<?php echo $_POST["precio_unitario"] ?>>
                <input type="hidden" name="precio_compra" id="precio_compra"
                    value=<?php echo $_POST["precio_compra"] ?>>
                <input type="hidden" name="complejo" id="complejo" value=<?php echo $_POST["complejo"] ?>>
                <input type="hidden" name="sala" id="sala" value=<?php echo $_POST["sala"] ?>>
                <input type="hidden" name="formato" id="formato" value=<?php echo $_POST["formato"] ?>>
                <input type="hidden" name="dia" id="dia" value=<?php echo $_POST["dia"] ?>>
                <input type="hidden" name="horario" id="horario" value=<?php echo $_POST["horario"] ?>>
                <input type="hidden" name="nombre_pelicula" id="nombre_pelicula"
                    value=<?php echo $_POST["nombre_pelicula"] ?>>
                <input type="hidden" name="nombre_imagen" id="nombre_imagen"
                    value=<?php echo $_POST["nombre_imagen"] ?>>
                <button class="btn btn-primary col-auto mt-3" id="continuar" type="submit" disabled>Continuar</button>

            </form>

        </div>
    </div>

    <!--footer-->
    <?php require_once "footer.php"; ?>

</body>

</html>