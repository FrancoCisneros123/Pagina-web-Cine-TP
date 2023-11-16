<?php
session_start();

include("conexion.php"); // Incluye el archivo de conexión a la base de datos

$error = "";

if (isset($_SESSION["emailLogin"])) {
    header("location: inicio.php");
}

if (isset($_POST["emailLogin"]) && isset($_POST["passwordLogin"])) {
    $email = $_POST["emailLogin"];
    $password = $_POST["passwordLogin"];

    // Consulta SQL para buscar el usuario en la base de datos
    $sql = "SELECT * FROM usuario WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $result = $stmt->fetch();

    if ($result) {
        $_SESSION["emailLogin"] = $email;
        $_SESSION["id_usuario"] = $result["id_usuario"];
        header("location: inicio.php");
    } else {
        $error = "Login fallido";
    }
}


/*
session_start();

$error = "";

if (isset($_SESSION["emailLogin"])){ //si ya ingreso, lo redirigimos a inicio, no hace falta enviarlo a login de nuevo
    header("location: inicio.php");
}



    if (isset($_POST["emailLogin"]) && ($_POST["passwordLogin"])) {
        $emailValido = "zalazar.leandro@gmail.com";
        $passwordValido = "123456";

        if ($emailValido == $_POST["emailLogin"] && $passwordValido == $_POST["passwordLogin"]) {
            echo "login okk";
            $_SESSION["emailLogin"] = $_POST["emailLogin"];
            header("location: inicio.php");
        } else {
            $error = "Login fallido";
        }
    } else {

    }*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CineEnCartelera - Iniciar sesion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos_inicio_de_sesion.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    <!--Busca las fuentes a utilizar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- <script src="js/script_inicio_de_sesion.js" async></script> -->
     <script src="js/script_inicio_de_sesion_clave.js" defer></script> 
</head>

<body>
    <div class="form-informacion" style="background-color: white">
        <h2>Iniciar sesión</h2>
        <p>Recuerda que es tu cuenta registrada en CineEnCartelera.com</p>
        <form action="" class="formulario" id="formLogin" method="post">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="emailLogin" name="emailLogin"
                    placeholder="nombre@ejemplo.com" required>
                <label for="floatingInput">Email</label>
                <div class="invalid-feedback">El email ingresado es incorrecto</div>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="passwordLogin" name="passwordLogin"
                    placeholder="Contraseña" required>
                <label for="floatingPassword">Contraseña</label>
                <div class="invalid-feedback">La contraseña ingresado es incorrecto</div>
            </div>

            <div class="form-floating mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="mostrarClave">

                    <label class="form-check-label" for="mostrarClave">
                        Mostrar contraseña
                    </label>
                </div>
            </div>

            <a href="url">Olvide mi contraseña</a>

            <?php
            if ($error != '')
                echo '<div class="alert alert-danger" role="alert">
            Error: Usuario o contraseña invalido
            </div>';

            ?>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Acceder</button>
                <a href="MVC/validarUsuario.php" class="btn btn-outline-dark" id="btnregistrar">Registrarse</a>
            </div>
        </form>
    </div>
</body>

</html>