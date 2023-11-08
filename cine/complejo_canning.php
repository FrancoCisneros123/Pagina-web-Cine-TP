<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - Complejo Canning</title>
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
                <div class="col">
                    <h4>Complejo Canning, Ezeiza</h4>
                    <b>Dirección: </b>
                    <p>Formosa 653 Canning, Ezeiza (Shopping Las Toscas)</p>
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="imagenes/establecimiento_cine_complejos3.jpeg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="imagenes/sala_complejos3.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/snaks_complejos.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <p style="margin-top: 20px;">Este complejo está ubicado en Canning, Ezeiza, en la zona urbanística
                        de mayor crecimiento del
                        Gran Buenos Aires de los últimos años.</p>

                    <p>Este complejo de 6 salas se complementa excelentemente bien con los locales comerciales y
                        especialmente gastronómicos del Shopping Las Toscas, dentro del cual se encuentra funcionando,
                        brindando al espectador la posibilidad de disfrutar de una salida completa dentro del mismo
                        ámbito.</p>

                    <p>Es de destacar que todas las salas poseen la mejor tecnología de proyección, sonido digital y
                        salas con proyección digital 2D y 3D.</p>

                    <p style="margin-bottom: 60px;">En septiembre de 2019 Cine en cartelera Canning instaló en su sala
                        N°1 el primer proyector de
                        cine en
                        Argentina con tecnología Láser 4K RGB. Un sistema que ofrece mejor definición a la experiencia
                        visual, una innovación en la industria del cine argentino. Recomendación especial para los
                        espectadores que buscan nuevas experiencias y sensaciones, esta sala le ofrece al cliente
                        calidad de proyección única que a la fecha no existe en el país. Hoy no todos los films poseen
                        calidad necesaria para exhibirse en Láser 4K, se espera únicamente para los estrenos
                        importantes. La primera película exhibida en este formato fue “Guasón” con fecha de estreno 3 de
                        octubre de 2019.</p>
                </div>
                <iframe style="margin-bottom: 30px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3273.986876791956!2d-58.50665102551991!3d-34.8565570708929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd13e3bc7b6c7%3A0xd9970de89e32ab48!2sLas%20Toscas%20Canning%20Shopping!5e0!3m2!1ses-419!2sar!4v1697828719853!5m2!1ses-419!2sar"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!--footer-->
        <?php require_once "footer.php"; ?>

    </div>

</body>

</html>