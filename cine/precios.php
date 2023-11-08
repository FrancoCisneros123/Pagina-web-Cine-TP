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
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <!--Busca las fuentes a utilizar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container-fluid" style="padding: 0%;">

        <!--barra de navegacion-->
        <?php require_once "barra_navegacion.php"; ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><b>PRECIOS</b></h2>
                </div>
            </div>

            <div class="col">
                <p>Encontrá aquí los precios de las entradas por venta web, por día, por complejo y tipo de sala 2D y 3D
                </p>
                <p>Importante: No está permitido el ingreso a las salas con alimentos y bebidas adquiridos fuera de
                    local.</p>
                <p>En las compras electrónicas (vía web) se adiciona un cargo por servicio de venta. El cargo de
                    servicio en Canning, Lomas de zamora y Puerto madero es de $100 por entrada.</p>
                <p>Recordá consultar las Preguntas Frecuentes para obtener respuestas inmediatas a los problemas más
                    comunes.</p>
            </div>

            <table class="table table-dark table-striped">
                <tr>
                    <td><b>SALA</td>
                    <td><b>PRECIO</b></td>
                </tr>
                <tr>
                    <td>2D</td>
                    <td>$1.500</td>
                </tr>
                <tr>
                    <td>3D</td>
                    <td>$3.000</td>
                </tr>
            </table>

            <p>La compra de entradas de cine de Cine en cartelera, a través del siguiente sitio web
                www.cineencartelera.com.ar y a través de las máquinas expendedoras de entradas (“ATM”), implica la
                aceptación por parte del cliente de todos y cada uno de los términos y condiciones.</p>

        </div>
    </div>

    <!--footer-->
    <?php require_once "footer.php"; ?>

</body>

</html>