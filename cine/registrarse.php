<?php
require 'registrarsebd.php';
$objregistrarsebd = new registrarsebd;

$objregistrarsebd->registrarUsuariobd();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_inicio_de_sesion.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!--Busca las fuentes a utilizar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="js/script.js"></script>
</head>

<body>
    <div class="form-informacion" style="background-color: white">
        <h2>Registrarse</h2>
        <p>Complete los campos a continuacion para crear una cuenta</p>
        <?php
                if ($objregistrarsebd->blAlert) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                    echo 'Usuario registrado correctamente';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo '</div>';
                }
                if ($objregistrarsebd->blAlertError) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';                            
                    echo 'Hubo un error: ' . $objregistrarsebd->lastError;
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo '</div>';
                }
                ?>
        <form class="formulario" action="" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <b>NOMBRE/s:</b>
                        <input type="text" class="form-control" id="floatingInput" name="nombre" required>
                        <b>APELLIDO:</b>
                        <input type="text" class="form-control" id="floatingInput" name="apellido" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <b>EMAIL:</b>
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="nombre@ejemplo.com"
                            required>
                        <b>CONTRASEÑA:</b>
                        <input type="password" class="form-control" id="floatingPassword" name="contrasena" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <b>CONFIRMAR CONTRASEÑA:</b>
                        <input type="password" class="form-control" id="floatingPassword" name="confirmarcontrasena" required>
                        <b>FECHA DE NACIMIENTO: </b>
                        <input type="date" id="birthday" name="nacimiento" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <b>GENERO:</b>
                        <select class="form-select" aria-label="Default select example" name="genero" required>
                            <option selected>Selecciona una opcion</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Otro">Otro</option>
                            <option value="Prefiero_no_indicar">Prefiero no indicar</option>
                        </select>
                        <b>CELULAR:</b>
                        <input type="number" class="form-control" id="floatingPassword" name="celular" required>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit" name="registrarse" >Crear cuenta</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>