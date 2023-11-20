<?php
require_once('../conexion.php');

// Inicializa la variable $data
$data = array();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    // Solo ejecuta la consulta si es una solicitud GET y se proporciona un ID

    $id = $_GET['id'];
    $queryString = "SELECT * FROM usuario WHERE id_usuario = :id";
    $stmt = $conn->prepare($queryString);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
    $data = $stmt->fetch();

    if ($data === false) {
        // si no se encontraron resultados
        echo "No se encontraron resultados para el ID proporcionado.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si el formulario ha sido enviado con el método POST

    $id = $_GET['id']; //guarda el id
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $confirmarcontrasena = $_POST['confirmarcontrasena'];
    $nacimiento = $_POST['nacimiento'];
    $genero = $_POST['genero'];
    $celular = $_POST['celular'];

    if ($contrasena !== $confirmarcontrasena) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    $sql = "UPDATE usuario SET nombre = :nombre, apellido = :apellido, email = :email, password = :contrasena, fecha_nacimiento = :nacimiento, genero = :genero, nro_telefono = :celular WHERE id_usuario = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->bindParam(':nacimiento', $nacimiento);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':celular', $celular);

    $result = $stmt->execute();

    if ($result) {
        echo "Gerente actualizado correctamente.";
    } else {
        echo "Error al actualizar el gerente: " . $stmt->errorInfo()[2];
    }

    // Actualiza la variable $data después de la actualización
    $data['nombre'] = $nombre;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineEnCartelera - Editar gerente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos_inicio_de_sesion.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="../js/script.js"></script>
</head>

<body>
    <div class="form-informacion">
        <h2>Editar gerente</h2>
        <p>Complete los campos a continuación.</p>
        <form class="formulario" action="" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <b>NOMBRE/s:</b>
                        <input type="text" class="form-control" id="floatingInput" name="nombre"
                            value="<?php echo isset($data['nombre']) ? $data['nombre'] : ''; ?>" required>
                        <b>APELLIDO:</b>
                        <input type="text" class="form-control" id="floatingInput" name="apellido"
                            value="<?php echo isset($data['apellido']) ? $data['apellido'] : ''; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <b>EMAIL:</b>
                        <input type="email" class="form-control" id="floatingInput" name="email"
                            placeholder="nombre@ejemplo.com"
                            value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>" required>
                        <b>CONTRASEÑA:</b>
                        <input type="password" class="form-control" id="floatingPassword" name="contrasena"
                            value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <b>CONFIRMAR CONTRASEÑA:</b>
                        <input type="password" class="form-control" id="floatingPassword" name="confirmarcontrasena"
                            value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>" required>
                        <b>FECHA DE NACIMIENTO: </b>
                        <input type="date" id="birthday" name="nacimiento"
                            value="<?php echo isset($data['fecha_nacimiento']) ? date('Y-m-d', strtotime($data['fecha_nacimiento'])) : ''; ?>"
                            required>

                    </div>
                    <div class="col-12 col-sm-6">
                        <b>GENERO:</b>
                        <select class="form-select" aria-label="Default select example" name="genero" required>
                            <option disabled>Selecciona una opcion</option>
                            <option value="Femenino" <?php echo (isset($data['genero']) && $data['genero'] === 'Femenino') ? 'selected' : ''; ?>>Femenino</option>
                            <option value="Masculino" <?php echo (isset($data['genero']) && $data['genero'] === 'Masculino') ? 'selected' : ''; ?>>Masculino</option>
                            <option value="Otro" <?php echo (isset($data['genero']) && $data['genero'] === 'Otro') ? 'selected' : ''; ?>>Otro</option>
                            <option value="Prefiero_no_indicar" <?php echo (isset($data['genero']) && $data['genero'] === 'Prefiero_no_indicar') ? 'selected' : ''; ?>>Prefiero no indicar
                            </option>
                        </select>
                        <b>CELULAR:</b>
                        <input type="number" class="form-control" id="floatingPassword" name="celular"
                            value="<?php echo isset($data['nro_telefono']) ? $data['nro_telefono'] : ''; ?>" required>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>