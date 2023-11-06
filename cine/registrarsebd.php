<?php
class registrarsebd {
    public $blAlert = false;
    public $lastUsuario = null;
    public $blAlertError = false;
    public $lastError = null;

    public function registrarUsuariobd() {
        require 'conexion.php';

        if (isset($_POST["registrarse"])) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $contrasena = $_POST["contrasena"];
            $confirmarcontrasena = $_POST["confirmarcontrasena"];
            $nacimiento = $_POST["nacimiento"];
            $genero = $_POST["genero"];
            $celular = $_POST["celular"];
            $tipo_usuario = 1; // Simula que al registrarse es un usuario tipo cliente

            // Verifica que las contraseñas coincidan
            if ($contrasena !== $confirmarcontrasena) {
                $this->blAlertError = true; // Corrección aquí
                $this->lastError = 'Las contraseñas no coinciden';
            }

            if (!$this->blAlertError) { 
                try {
                    $queryString = "INSERT INTO usuario (email, password, nombre, apellido, nro_telefono, fecha_nacimiento, genero, id_tipo_usuario) VALUES (:email, :contrasena, :nombre, :apellido, :celular, :nacimiento, :genero, :tipo_usuario)";

                    $sql = $conn->prepare($queryString);
                    
                    $sql->bindParam(':email', $email); // bindParam limpia código malicioso
                    $sql->bindParam(':contrasena', $contrasena);
                    $sql->bindParam(':nombre', $nombre);
                    $sql->bindParam(':apellido', $apellido);
                    $sql->bindParam(':celular', $celular);
                    $sql->bindParam(':nacimiento', $nacimiento);
                    $sql->bindParam(':genero', $genero);
                    $sql->bindParam(':tipo_usuario', $tipo_usuario);

                    if ($sql->execute()) {
                        $this->blAlert = true;
                    } else {
                        $this->blAlertError = true;
                        $this->lastError = $e->getMessage();
                    }
                } catch (Exception $e) {
                    $this->blAlertError = true;
                    $this->lastError = $e->getMessage();
                }
            }
        }
    }
}
?>

