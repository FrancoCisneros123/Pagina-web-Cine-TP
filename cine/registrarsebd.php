<?php
include("conexion.php"); // Incluye el archivo de conexión a la base de datos

if(isset($_POST["registrarse"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $confirmarcontrasena = $_POST["confirmarcontrasena"];
    $nacimiento = $_POST["nacimiento"];
    $genero = $_POST["genero"];
    $celular = $_POST["celular"];
    $tipo_usuario = 1; // Simula que al registrarse es un cliente

    // Verifica que las contraseñas coincidan
    if ($contrasena !== $confirmarcontrasena) {
        echo "<div>Error, las contraseñas no coinciden.</div>";
    } else {
        // Prepara la consulta SQL con marcadores de posición
        $sql = $conn->prepare("INSERT INTO usuario (email, password, nombre, apellido, nro_telefono, fecha_nacimiento, genero, id_tipo_usuario) VALUES (:email, :contrasena, :nombre, :apellido, :celular, :nacimiento, :genero, :tipo_usuario)");
        
        // Enlaza los valores a los marcadores de posición
        $sql->bindParam(':email', $email, PDO::PARAM_STR);
        $sql->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
        $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $sql->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $sql->bindParam(':celular', $celular, PDO::PARAM_STR);
        $sql->bindParam(':nacimiento', $nacimiento, PDO::PARAM_STR);
        $sql->bindParam(':genero', $genero, PDO::PARAM_STR);
        $sql->bindParam(':tipo_usuario', $tipo_usuario, PDO::PARAM_INT);

        // Ejecuta la consulta
        if ($sql->execute()) {
            echo "<div>Se ha registrado correctamente.</div>";
        } else {
            echo "<div>Error al registrar.</div>";
        }
    }
}
?>
