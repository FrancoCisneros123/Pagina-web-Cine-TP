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
</head>

<body>
    <div class="container-fluid" style="padding: 0%;">

        <!--barra de navegacion-->
        <?php require_once "barra_navegacion.php"; ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2><b>NUESTROS COMPLEJOS</b></h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p>Cine en cartelera posee complejos en Canning (Ezeiza), Lomas de zamora y Puerto madero, las
                        compras se realizan de manera online y podras retirar los boletos en la boleteria de cualquier
                        establecimiento.</p>
                    <p>Los horarios son de lunes a domingo desde las 8:00hs a 23:59hs</p>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card card-individual">
                        <img src="imagenes/establecimiento_cine_complejos3.jpeg" class="card-img-top" alt="...">
                        <a href="complejo_canning.html" class="stretched-link"></a>

                        <div class="card-body" style="background-color: black; color: white;">
                            <h5 class="card-title">CANNING</h5>
                            <a href="complejo_canning.html" class="stretched-link"></a>
                        </div>

                    </div>
                </div>

                <div class="col-6">
                    <div class="card card-individual">
                        <img src="imagenes/establecimiento_cine_complejos.jpeg" class="card-img-top" alt="...">
                        <a href="complejo_lomas.html" class="stretched-link"></a>

                        <div class="card-body" style="background-color: black">
                            <h5 class="card-title" style="color: white;">LOMAS DE ZAMORA</h5>
                            <a href="complejo_lomas.html" class="stretched-link"></a>
                        </div>

                    </div>
                </div>


                <div class="col-6">
                    <div class="card card-individual">
                        <img src="imagenes/establecimiento_cine_complejos2.jpeg" class="card-img-top" alt="...">
                        <a href="complejo_puerto.html" class="stretched-link"></a>

                        <div class="card-body" style="background-color: black">
                            <h5 class="card-title" style="color: white">PUERTO MADERO</h5>
                            <a href="complejo_puerto.html" class="stretched-link"></a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--footer-->
    <?php require_once "footer.php"; ?>

    </div>

</body>

</html>