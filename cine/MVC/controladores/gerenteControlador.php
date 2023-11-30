<?php
namespace controladores;

use Exception;
use usuario;

class gerenteControlador
{
    public function nuevoGerente()
    {
        $registro_insertado = false; //esta variable se volvera true si los datos son correctos para agregarse a la base de datos
        $arrErrores = []; //array que contendra errores en caso de haberlos (ej: pocos caracteres en numero de telefono o si confirma mal la contraseña)

        //validaciones backend
        if (isset($_POST["registrarse"])) {

            require_once 'modelos/usuario.php';


            /*if (!isset($_POST['email']) || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $arrErrores['email'] = 'Error, complete el campo correctamente';
            }*/

            $email = $_POST['email'];
            require_once('../conexion.php');
            /** @var \PDO $conn */

            $sql = "SELECT * FROM usuario WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();


            $rowCount = $stmt->rowCount();


            if ($rowCount > 0) {
                $arrErrores['email'] = 'Error, el mail ingresado ya existe';
            }

            if (!isset($_POST['contrasena']) || strlen($_POST['contrasena']) < 6) {
                $arrErrores['contraseña'] = 'Error, complete el campo correctamente';
            }

            if (!isset($_POST['celular']) || strlen($_POST['celular']) < 8) {
                $arrErrores['celular'] = 'Error, complete el campo correctamente';
            }

            if ($_POST['contrasena'] !== $_POST['confirmarcontrasena']) {
                $arrErrores['contraseña'] = 'Error, las contraseñas no coinciden';
            }

            //verifica si hay errores, de lo contrario llama al modelo para guardar el registro
            if (count($arrErrores) == 0) {
                try {
                    $nombre = $_POST["nombre"];
                    $apellido = $_POST["apellido"];
                    $email = $_POST["email"];
                    $contrasena = $_POST["contrasena"];
                    $confirmarcontrasena = $_POST["confirmarcontrasena"];
                    $nacimiento = $_POST["nacimiento"];
                    $genero = $_POST["genero"];
                    $celular = $_POST["celular"];
                    $tipo_usuario = 3; // Simula que al registrarse es un usuario tipo gerente

                    //se crea un objeto con el constuctor de la clase usuario (Usamos la clase usuario pero creamos un gerente) y se le pasa como parametro las variables que contienen lo que se recibio del formulario
                    $objUsuario = new usuario($nombre, $apellido, $email, $contrasena, $confirmarcontrasena, $nacimiento, $genero, $celular, $tipo_usuario);
                    $registro_insertado = $objUsuario->save(); //se invoca al metodo save, que contiene la logica del guardado en la base de datos, el true or false que devuelva se guarda en la variable registro_insertado

                } catch (Exception $e) {
                    echo "Error inesperado" . $e->getMessage();
                    die();
                }
            }
        }

        require 'vistas/registrogerente.php';
    }
}
?>