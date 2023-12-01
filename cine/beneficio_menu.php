<?php 
     require_once("conexion.php");
     /** @var \PDO $conn */
     $lista_beneficio = $conn->query("SELECT * FROM beneficio");
     $conn = null;
     $lista_beneficio = $lista_beneficio->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - Beneficios</title>
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

    <!-- Iconos  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/estilo_container_padding.css">
    <script src="js/script_inicio.js" defer></script>

    <script src="js/script_barra_navegacion.js" defer></script>
    <script src="js/script_footer.js" defer></script>

    
</head>
<body>
<?php require_once("barra_navegacion.php") ?>
    <br>
    <div class="container">
        <nav class="nav nav-tabs">
            <a class="nav-link link-warning" href="home_gerente.php"><i class="bi bi-film"></i> Peliculas</a>
            <a class="nav-link link-warning" href="gerente_funciones.php"><i class="bi bi-clock"></i> Funciones</a>
            <a class="nav-link link-warning" href="#"> <i class="bi bi-door-closed"></i></i>Salas</a>
            <a class="nav-link link-warning" href="notificacion_menu.php"><i class="bi bi-bell"></i> Notificaciones</a>
            <a class="nav-link link-black active" href="#"><i class="bi bi-piggy-bank"></i> Beneficios</a>
        </nav>
        
        <h2 class="mt-5"><i class="bi bi-piggy-bank"></i> Notificaciones creadas:</h2>
        <br>
        <a class="btn btn-outline-warning" href="crear_beneficio.php">Crear nuevo beneficio</a>
        <div class="table-responsive rounded mt-4">
            <table class="table table-dark table-striped border-danger">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descuento %</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($lista_beneficio))
                        {
                            foreach ($lista_beneficio as $beneficio) {
                                echo "<tr>";
                                echo '<td name="id">' . $beneficio["id_beneficio"] . "</td>";
                                echo "<td>" . $beneficio["nombre_beneficio"] . "</td>";
                                echo "<td>" . $beneficio["porcentaje_descuento"] . "</td>";
                                echo "<td>" . '<a href="editar_beneficio.php?id_notificacion=' . $beneficio["id_beneficio"] . '" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i>Editar</a></td>';
                                echo "<td>" . '<a href="eliminar_beneficio.php?id_notificacion=' . $beneficio["id_beneficio"] . '" class="btn btn-outline-danger"><i class="bi bi-trash"></i>Eliminar</a></td>';
                                echo "</tr>";
                            }
                        }
                        else
                        {
                            echo '<div class="alert alert-danger">No se ha encontrado ninguna notificacion.</div>';
                        }
                    ?>
                </tbody>
                </table>
            </div>

        </div>
        <br>
    <?php require_once "footer.php"; ?>
</body>
</html>