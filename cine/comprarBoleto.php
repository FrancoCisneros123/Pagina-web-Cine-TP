<?php require_once "informacion_pelicula.php"; 

$precio;

if ($_GET["formato"] == "2D")
    $precio = 1500;
else
    $precio = 2000;

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

    <script src="js/script_comprar_boleto.js" defer></script>
    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
</head>

<body>

    <?php require_once "barra_navegacion.php"; ?>

    <div class="container" id="informacion">

        <h1>Compra de boletos</h1>

        <div class="row">
            <div>
                <br>
                <img src=<?php echo $datos["nombre_imagen"] ?> width="200" alt="" id="imagen-pelicula"
                    class="img-fluid rounded mx-auto d-block">
            </div>

            <h2>
                <?php echo $datos["nombre_pelicula"] ?>
            </h2>

            <div>
                <form action="sala.php">
                    <br>

                    <label for="cantidadBoletos" class="form-label">Cantidad de boletos</label>
                    <input type="number" name="cantidadBoletos" id="cantidadBoletos" class="form-control" min="1" max="50" value="1">

                    
                    <label for="precioUnitario" class="form-label">precio unitario</label>
                    <input type="number" name="precioUnitario" id="precioUnitario" class="form-control" value="<?php echo $precio?>" readonly>
                    
                    <label for="precioCompra" class="form-label">Total a pagar</label>
                    <input type="number" name="precioCompra" id="precioCompra" class="form-control" value="<?php echo $precio ?>" readonly>

                    <div></div>

                    <br><button type="submit" class="btn btn-success">Confirmar compra</button>
                </form>
            </div>

        </div>

    </div>

    <?php require_once "footer.php"; ?>

</body>