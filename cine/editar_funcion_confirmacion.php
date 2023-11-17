<?php
session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion

}

require "actualizar_funcion.php";
require "cargar_funcion_creada_datos_pelicula.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera</title>
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
    <link rel="stylesheet" href="css/estilo_funcion.css">

    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
</head>

<body>
    <div class="container-fluid" id="container-padding">

        <!--barra de navegacion-->
        <?php require_once "barra_navegacion.php"; ?>

        <!--crear funcion-->
        <div class="container" id="funcion_informacion">
            <h1>Funcion <?php echo $_POST["id_funcion"]?> editada</h1>

            <div>
                <img src=<?php echo $pelicula_imagen ?> width="200" alt="" id="imagen-pelicula"
                    class="img-fluid rounded mx-auto d-block mb-4 mt-4">
            </div>

            <?php echo
                "Horario: " . $_POST["horario_entrada"] . "<br>" .
                "Sala: " . $_POST["sala"] . "<br>" .
                "Pelicula: " . $pelicula . "<br>" .
                "Dia: " . $_POST["dia"] . "<br>" .
                "Formato: " . $_POST["formato"] . "<br>"
                ?>

            <a href="gerente_funciones.php" class="btn btn-primary mt-4">Volver a la administracion de funciones</a>
        </div>

        <!--footer-->
        <?php require_once "footer.php"; ?>

</body>

</html>