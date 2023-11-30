<!-- php
session_start();

if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
    header("location: index.php"); //redirige al login 
    die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion

}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - inicio</title>
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
    <script defer src="../js/inicio_admin.js"></script>
</head>

<body>

    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-3 border-bottom border-danger">
        <div class="container-fluid">
            <a href="inicio.php" class="navbar-brand">
                <img class="img-thumbnail" src="../imagenes/logo_inicio_opcion2.jpeg" alt="CINE EN CARTELERA" id="logonav">
                <!--logo en el extremo superior izquierdo-->
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="MenuNavegacion" class="collapse navbar-collapse">

                <!--opciones-->
                <ul class="navbar-nav ms-3" id="barra_navegacion_lista">
                </ul>



                <ul class="navbar-nav ms-auto">
                    <!-- navbar-nav ms-auto -->
                    <!--etiqueta de boostrap 5 que coloca elementos en el lugar derecho (en este caso la lupa)-->

                    <li class="nav-item">
                        <form action="busqueda_index.php" class="d-flex botones">
                            <input class="form-control me-2" type="search" placeholder="Ingresa tu busqueda"
                                aria-label="Search" id="busquedaUsuario" name="busquedaUsuario">

                            <button class="btn btn-outline-warning" type="submit">Buscar</a>
                        </form>
                    </li>

                    <!--boton de cerrar sesion-->
                    <li class="nav-item">
                        <form class="d-flex botones">
                            <a href="../desloguear.php" class="btn btn-outline-danger" type="submit">Logout</a>
                        </form>
                    </li>

                    <!--boton de perfil-->
                    <li class="nav-item dropdown">
                        <form class="d-flex botones">
                            <a href="../perfil.php" class="btn btn-outline-primary" type="submit"><i
                                    class="bi bi-person-circle"></i>Mi perfil</a>
                        </form>

                    </li>
                </ul>
            </div>


        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <!--copiado del codigo de la clase 17 ajax -->
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h1>Gerentes</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="tabla_gerentes">
                                    <thead>
                                        <tr>
                                            <!--<th>#</th> -->
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Email</th>
                                            <th>Telefono</th>
                                            <th>Fecha nacimiento</th>
                                            <th>Genero</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--esta vacio ya que se completa con ajax -->
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="../MVC/validargerente.php" class="btn btn-success" id="btnregistrar">Agregar
                                    nuevo gerente</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>