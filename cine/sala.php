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

    <script src="js/script_sala.js"></script>
</head>

<body>

    <!--barra de navegacion-->
    <?php require_once "barra_navegacion.php"; ?>

    <div class="container">

        <h1>Disponibilidad de la sala</h1>

        <!--asientos---->
        <div class="cine">

            <div class="row">

                <!--parte izquierda con sus asientos-->
                <div class="col-12 col-xs-6 col-md-6 col-lg-6 ">
                    <div class="cine-asientos izquierda"> 
                        <?php require_once "generarSalaFilaIzquierda.php" ?>
                    </div>
                </div>

                <!--parte derecha con sus asientos-->
                <div class="col-12 col-xs-6 col-md-6 col-lg-6">
                    <div class="cine-asientos derecha">
                       <?php require_once "generarSalaFilaDerecha.php" ?>
                    </div>
                </div>

            </div>

        </div>

        <!--Referencias-->
        <h2>Referencias</h2>

        <div class="referencias">

            <p class="parrafo-referencia">Libre</p>
            <div class="asiento ejemplo" id="asiento-libre-ejemplo"></div>

            <p class="parrafo-referencia">Reservado</p>
            <div class="asiento ejemplo" id="asiento-reservado-ejemplo"></div>

            <p class="parrafo-referencia">Ocupado</p>
            <div class="asiento ejemplo" id="asiento-ocupado-ejemplo"></div>

        </div>

        <!--reserva-->
        <div class="reserva">

            <h2>Reserva</h2>

            <div class="row align-items-center">

                <div class="col-auto">
                    <select class="form-select" id="dropdownAsiento">
                        <option selected>Seleccionar asiento</option>
                    </select>
                </div>

                <div class="col-auto">
                    <button class="btn btn-success col-auto" type="submit">Reservar asiento</button>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php require_once "footer.php"; ?>

</body>

</html>