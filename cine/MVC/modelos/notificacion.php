<?php
class Notificacion
{
    private string $nombre; //50 caracteres
    private string $descripcion; //100 caracteres

    public function __construct()
    {
    }
    public function __destruct()
    {
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    //Validaciones
    public function validarNombre($nombre)
    {
        if (empty($nombre) || strlen($nombre) >= 50)
            return 'El título de la notificación no debe estar vacío y no debe superar más de los 50 cáracteres.';
    }

    public function validarDescripcion($descripcion)
    {
        if (empty($descripcion) || strlen($descripcion) >= 100)
            return 'La descripción no debe estar vacía y no debe superar más de los 100 cáracteres.';

    }


    public function mostrarNotificaciones()
    {
        require_once("conexion.php");
        /** @var \PDO $conn */
        $query_notificaciones = $conn->query("SELECT id_notificacion,nombre_notificacion,descripcion FROM notificacion");
        $conn = null;
        return $query_notificaciones->fetchAll(PDO::FETCH_ASSOC);
    }

    public function seleccionarNotificacion($id_notificacion)
    {
        require_once("conexion.php");
        $queryNotificacion = $conn->prepare("SELECT * FROM notificacion WHERE id_notificacion = :id_notificacion");
        $queryNotificacion->bindParam(':id_notificacion', $id_notificacion);
        $queryNotificacion->execute();
        return $queryNotificacion->fetch(PDO::FETCH_ASSOC);
    }

    //Crear nueva notificacion
    public function agregarNotificacion()
    {
        require_once("conexion.php");
        /** @var \PDO $conn */
        $query = 'INSERT INTO notificacion (nombre_notificacion,descripcion) VALUES (:nombre_notificacion,:descripcion)';
        $sql = $conn->prepare($query);

        $sql->bindParam(':nombre_notificacion', $this->nombre);
        $sql->bindParam(':descripcion', $this->descripcion);

        $resultado = $sql->execute();

        $conn = null;
        return $resultado;
    }

    //Actualizar notificacion
    public function actualizarNotificacion($id_notificacion)
    {
        require_once("conexion.php");
        /** @var \PDO $conn */
        $query = 'UPDATE notificacion SET nombre_notificacion = :nombre_notificacion ,descripcion = :descripcion WHERE id_notificacion = :id_notificacion';
        $sql = $conn->prepare($query);

        $sql->bindParam(':nombre_notificacion', $this->nombre);
        $sql->bindParam(':descripcion', $this->descripcion);
        $sql->bindParam(':id_notificacion', $id_notificacion);

        $resultado = $sql->execute();
        $conn = null;
        return $resultado;
    }

    //Eliminar notificacion
    public function eliminarNotificacion($id_notificacion)
    {
        require("conexion.php");
        $sql = "DELETE FROM notificacion WHERE id_notificacion = :id_notificacion";
        $query = $conn->prepare($sql);
        $query->bindParam(":id_notificacion", $id_notificacion);
        $query->execute();
    }

    //Setters y getters
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }


}

?>