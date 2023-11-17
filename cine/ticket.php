<?php
session_start();
require_once "conexion.php";

$sql = "INSERT INTO ticket (id_usuario, complejo, formato, dia, horario, pelicula, cantidad_boletos, precio_unitario, precio_compra)
    VALUES (:id_usuario,:complejo, :formato, :dia, :horario, :nombre_pelicula, :cantidad_boletos, :precio_unitario, :precio_compra)";

$query = $conn->prepare($sql);
$query->bindParam(":id_usuario", $_SESSION["id_usuario"]);
$query->bindParam(":complejo", $_POST["complejo"]);
$query->bindParam(":formato", $_POST["formato"]);
$query->bindParam(":dia", $_POST["dia"]);
$query->bindParam(":horario", $_POST["horario"]);
$query->bindParam(":nombre_pelicula", $_POST["nombre_pelicula"]);
$query->bindParam(":cantidad_boletos", $_POST["cantidad_boletos"]);
$query->bindParam(":precio_unitario", $_POST["precio_unitario"]);
$query->bindParam(":precio_compra", $_POST["precio_compra"]);
$query->execute();
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
    <link rel="stylesheet" href="css/estilo_peliculaInfo.css">

    <script src="js/script_comprar_boleto.js" defer></script>
    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>
</head>

<body>

    <?php require_once "barra_navegacion.php"; ?>

    <div class="container" id="informacion">

        <h1>Ticket</h1>

        <div class="row">
            <div>
                <br>
                <img src=<?php echo $_POST["nombre_imagen"] ?> width="200" alt="" id="imagen-pelicula" class="img-fluid rounded mx-auto d-block">
            </div>

            <h2>
                Informacion del ticket
            </h2>

            <div>
                <?php
                    echo "Complejo: " . $_POST["complejo"] . "<br>"  .
                    "Formato: " . $_POST["formato"] . "<br>" .
                    "Dia: " . $_POST["dia"] . "<br>" .
                    "Horario: " . $_POST["horario"] . "<br>" .
                    "Pelicula: " . $_POST["nombre_pelicula"] . "<br>" .
                    "Cantidad de boletos: " . $_POST["cantidad_boletos"] . "<br>" .
                    "Precio unitario: " . $_POST["precio_unitario"] . "<br>" .
                    "Precio total: " . $_POST["precio_compra"] . "<br>";
                ?>
            </div>

        </div>

    </div>

    <?php require_once "footer.php"; ?>

</body>