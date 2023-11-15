<!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-3 border-bottom border-danger">
        <div class="container-fluid">
            <a href="inicio.php" class="navbar-brand">
                <img class="img-thumbnail" src="imagenes/logo_inicio_opcion2.jpeg" alt="CINE EN CARTELERA"
                    id="logonav">
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
                    <!--etiqueta de boostrap 5 que coloca elementos en el lugar derecho (en este caso la lupa)-->
                    <li class="nav-item" id="busqueda">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Ingresa tu busqueda"
                                aria-label="Search">
                            <button class="btn btn-outline-warning" type="submit">Buscar</button>
                        </form>
                    </li>

                    <!--boton de cerrar sesion-->
                    <li class="nav-item" id="cerrar-sesion">
                        <form class="d-flex">
                        <a href="desloguear.php" class="btn btn-outline-danger" type="submit">Logout</a>
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </nav>