<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - Nueva película</title>
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
    <?php require_once "barra_navegacion.php"; ?><br>

    <div class="container">
        <h2>Agregar nueva pélicula:</h2><br>
        <?php
         if (count($arrayErrores) > 0) {
            echo "<div class='alert alert-danger'>Se han detectado errores:</br>";
            foreach ($arrayErrores as $strCampo => $strError) {
                echo "<strong>" . $strCampo . "</strong>" . ": " . $strError . "</br>";
            }
            echo "</div>";
        }
        if($resultado == true){
            echo '<div class="alert alert-success" role="alert">
            Se agregó la pélicula con éxito.
          </div>';
        }
        ?>
       
        <form action="" method="post">
        
            <label for="nombre">Nombre de la pélicula:</label>
            <input class="form-control" type="text" name="nombre_pelicula" id="nombre" required><br>

            <label for="duracion">Duración:</label>
            <input class="form-control" type="text" name="duracion" id="duracion" required><br>

            <label for="fecha_estreno">Fecha de estreno:</label>
            <input class="form-control" type="date" name="fecha_estreno" id="fecha_estreno" required><br>

            <label for="fecha_baja">Fecha de baja:</label>
            <input class="form-control" type="date" name="fecha_baja" id="fecha_baja" required><br>

            <label for="nombre_imagen">Nombre de la imagen:</label>
            <input class="form-control" type="text" name="nombre_imagen" id="nombre_imagen" required><br>

            <label for="sinopsis">Sinopsis:</label>
            <textarea class="form-control" rows="4" name="sinopsis" id="sinopsis" placeholder="Máximo de 50.000 cáracteres" required></textarea>
            <br>

            <label for="formatos">Formatos:</label>
            <input class="form-control" type="text" name="formatos" id="formatos" required><br>

            <label for="idiomas">Idiomas:</label>
            <input class="form-control" type="text" name="idiomas" id="idiomas" required><br>

            <label for="generos">Géneros:</label>
            <input class="form-control" type="text" name="generos" id="generos" required><br>

            <label for="esEstreno">¿Es estreno?:</label>
            <select class="form-select" name="esEstreno" id="esEstreno">
                <option value="default">--Seleccione una opción--</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select><br>
            
            <button class="btn btn-danger" name="submit">Agregar</button>
            <button class="btn btn-primary">Cancelar</button>
        </form>
    </div><br>

    <?php require_once "footer.php";?>
   