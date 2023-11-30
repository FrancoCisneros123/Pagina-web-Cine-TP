<?php

class Permisos
{
    public function tienePermiso($descripcion_permiso, $id_usuario)
    {
        if (isset($permiso) || isset($id_usuario)) {
            $conn = $this->conectarDB();
            /** @var \PDO $conn */

            $sql = 'SELECT 1
            FROM permiso INNER JOIN rol_permisos ON permiso.id_permiso = rol_permisos.id_permiso
            INNER JOIN usuario_rol on usuario_rol.id_tipo_usuario = rol_permisos.id_tipo_usuario
            WHERE usuario_rol.id_usuario = :id_usuario 
            AND permiso.descripcion_permiso = :descripcion_permiso;';

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id_usuario', $id_usuario);
            $stmt->bindValue(':descripcion_permiso', $descripcion_permiso);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
          
            return !empty($result);
        }

    }

    public function conectarDB()
    {
        $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "cinedb";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=" . $db . ";charset=utf8", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Exito al conectar con la base de datos"; 
                return $conn;

            } catch (PDOException $e) { //luego modificar con exeption para capturar cualquier excepcion en general
                echo "Conexion fallida: " . $e->getMessage();
                die(); //similar a un exit
            }
    }
}

?>