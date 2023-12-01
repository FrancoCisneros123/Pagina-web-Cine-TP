<?php 
    session_start();

    if (!isset($_SESSION["emailLogin"])) { //si no esta seteado
        header("location: index.php"); //redirige al login 
        die(); //finalizaria la ejecucion de este script ya que el usuario no inicio sesion

    }

    require("MVC/controladores/permisos.php");
    $permisosObj = new Permisos();

    if(! $permisosObj->tienePermiso("Crear nueva función", $_SESSION["id_usuario"])) {
        require ("MVC/vistas/error_permiso.php");
        die();
    }
    $arrayErrores = [];
    $resultado = false;

    if(isset($_POST["submit"]))
    {
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $porcentaje = (float)$_POST["porcentaje"];

        if (empty($descripcion) || strlen($descripcion) >= 100)
        {
            $arrayErrores["descripcion"]='La descripción no debe estar vacía y no debe superar más de los 100 cáracteres.';
        }

        if (empty($nombre) || strlen($nombre) >= 50)
        {
            $arrayErrores["nombre"]='El nombre no debe estar vacío y no debe superar más de los 50 cáracteres.';
        }

        if (empty($porcentaje) || !is_numeric($porcentaje))
        {
            $arrayErrores["porcentaje"]='El porcentaje debe ser un valor númerico';
        }
            
        $arrayErrores = array_filter($arrayErrores);

        if(empty($arrayErrores))
        {
     
            require_once("conexion.php");
            /** @var \PDO $conn */
             $query = 'INSERT INTO beneficio (nombre_beneficio,descripcion,porcentaje_descuento) VALUES (:nombre,:descripcion,:porcentaje)';
            $sql = $conn->prepare($query);

            $sql->bindParam(':nombre',$nombre);
            $sql->bindParam(':descripcion', $descripcion);
            $sql->bindParam(':porcentaje', $porcentaje);

            $resultado = $sql->execute();
            $conn = null;
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - Nuevo beneficio</title>
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
        <a href="beneficio_menu.php">Volver atrás</a> 
        <h2 class="mt-3">Agregar nuevo beneficio:</h2><br>

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
            <label for="nombre">Nombre de beneficio:</label>
            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Debe tener menos de 50 cáracteres"><br>

            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="4" placeholder="Debe tener menos de 100 cáracteres."></textarea>

            <label for="porcentaje">Porcentaje de descuento:</label>
            <input class="form-control" type="number" name="porcentaje" id="porcentaje" placeholder="Debe tener menos de 50 cáracteres"><br>

            <div class="mt-4">
            <button class="btn btn-warning" name="submit">Agregar</button>
            <a href="beneficio_menu.php" class="btn btn-danger">Cancelar</a>
            </div>
            
        </form>
    </div><br>

    <?php require_once "footer.php";?>