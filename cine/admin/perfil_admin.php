<?php
session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion

}

require_once "../cargar_datos_perfil.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos_inicio.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <!--Busca las fuentes a utilizar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/estilo_container_padding.css">
    <link rel="stylesheet" href="../css/estilo_perfil.css">

    <script src="../js/script_perfil.js" defer></script>
    <script src="../js/script_barra_navegacion.js" defer></script>
    <script src="../js/script_footer.js" defer></script>
    <!-- Iconos bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


</head>

<body>
    <div class="container-fluid" id="container-padding">

        <!--barra de navegacion-->
        <?php require_once "barra_de_navegacion_admin.php"; ?>

        <!--crear funcion-->
        <div class="container" id="informacion">
            <h1>Mi perfil </h1>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value=<?php echo $datos["email"] ?> disabled>
            </div>

            <div class="mb-3">
                <label for="clave" class="form-label">Clave</label>
                <input type="password" class="form-control" id="clave" value=<?php echo $datos["password"] ?> disabled>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="mostrarClave">
                <label class="form-check-label" for="mostrarClave">Mostrar clave</label>
            </div>


            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" value=<?php echo $datos["nombre"] ?> disabled>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" value=<?php echo $datos["apellido"] ?> disabled>
            </div>

            <div class="mb-3">
                <label for="nro_telefono" class="form-label">Numero de telefono</label>
                <input type="text" class="form-control" id="nro_telefono" value=<?php echo $datos["nro_telefono"] ?>
                    disabled>
            </div>

            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="text" class="form-control" id="fecha_nacimiento" value=<?php echo $datos["fecha_nacimiento"] ?> disabled>
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <input type="text" class="form-control" id="genero" value=<?php echo $datos["genero"] ?> disabled>
            </div>

        </div>

</body>

</html>