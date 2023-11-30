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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">    
    
    <link rel="stylesheet" href="css/estilo_container_padding.css">
    <script src="js/script_inicio.js" defer></script>

    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
</head>

<body>
    <?php require_once "barra_navegacion.php"; ?><br>

    <div class="container">
        <a href="notificacion_menu.php">Volver atrás</a> 
        <h2 class="mt-3">Agregar nueva notificacion:</h2><br>

        <?php
         if (count($arrayErrores) > 0) {
            echo "<div class='alert alert-danger'><strong>Se han detectado los siguientes errores:</strong></br><ul>";
            foreach ($arrayErrores as $strCampo => $strError) {
                if($strError != null)
                    echo '<li>'. $strError .'</li>';
            }
            echo "</ul></div>";
        }
        if($resultado == true){
            echo '<div class="alert alert-success" role="alert">
            <i class="bi bi-check-lg"></i> Se agregó la nueva notificación con éxito.
          </div>';
        }
        ?>
       
        <form action="" method="post">
        
            <label for="titulo">Titulo de la notificación:</label>
            <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Debe tener menos de 50 cáracteres"><br>

            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="4" placeholder="Debe tener menos de 100 cáracteres."></textarea>

            <div class="mt-4">
            <button class="btn btn-warning" name="submit">Agregar</button>
            <a href="notificacion_menu.php" class="btn btn-danger">Cancelar</a>
            </div>
            
        </form>
        <div class="alert alert-info mt-5"><i class="bi bi-info-circle"></i> Todas las notificaciones creadas seran visualizadas unicamente por los usuarios clientes.</div>
    </div><br>

    <?php require_once "footer.php";?>