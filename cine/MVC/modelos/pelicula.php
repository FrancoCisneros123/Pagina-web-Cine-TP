<?php
class Pelicula
{
    private string $nombre_pelicula;
    private string $duracion;
    private string $fecha_estreno;
    private string $fecha_baja;
    private string $nombre_imagen;
    private string $sinopsis;
    private string $genero;
    private string $formatos;
    private string $idiomas;
    private string $esEstreno;

    public function __construct()
    {
    }
    public function __destruct()
    {
    }

    //Validaciones
    public function validarNombrePelicula($nombre_pelicula)
    {
        if(empty($nombre_pelicula) || strlen($nombre_pelicula) > 200)
            return "El nombre de la pelicula no debe estar vacío o tener más de 200 cáracteres.";
       
    }

    public function validarDuracion($duracion)
    {
        if (empty($duracion) || strlen($duracion) > 100)
            return "La duracion de la pelicula no debe estar vacía o tener más de 100 cáracteres.";
     
    }

    public function validarFechaEstreno($fecha_estreno)
    {
        if (empty($fecha_estreno))
            return "La fecha de estreno no debe estar vacía.";
    
    }

    public function validarFechaBaja($fecha_baja)
    {
        if (empty($fecha_baja))
            return "La fecha de baja no debe estar vacía.";

    }

    public function validarNombreImagen($nombre_imagen){
        if (empty($nombre_imagen) || strlen($nombre_imagen) > 100)
            return "El nombre de la imagen no debe estar vacío o tener más de 100 cáracteres.";
     

    }

    public function validarSinopsis($sinopsis){
        if (empty($sinopsis) || strlen($sinopsis) > 50000)
            return "La sinopsis de la pelicula no debe estar vacía o tener más de 50000 cáracteres.";
     
    }

    public function validarFormatos($formatos){
       if (empty($formatos) || strlen($formatos) > 500)
            return "Los formatos de la pelicula no deben estar vacíos o tener más de 500 cáracteres.";
     
    }

    public function validarIdiomas($idiomas){
        if (empty($idiomas) || strlen($idiomas) > 500)
            return "Los idiomas de la pelicula no debe estar vacíos o tener más de 500 cáracteres.";
    
    }
    public function validarGeneros($generos){
        if (empty($generos) || strlen($generos) > 500)
            return "Los géneros de la pelicula no deben estar vacío o tener más de 500 cáracteres.";
   
    }

    public function validarEstreno($esEstreno){
        if (empty($esEstreno) || ($esEstreno != 'si' && $esEstreno != 'no'))
            return "La opción ingresa no  es válida.";

    }



    //Insertar,seleccionar,actualizar y eliminar datos
    public function agregarPelicula()
    {
        require_once("conexion.php");
        /** @var \PDO $conn */
        $query = 'INSERT INTO pelicula (nombre_pelicula,duracion,fecha_estreno,fecha_baja,nombre_imagen,sinopsis,genero,formatos,idiomas,esEstreno) VALUES (:nombre_pelicula,:duracion,:fecha_estreno,:fecha_baja,:nombre_imagen,:sinopsis,:genero,:formatos,:idiomas,:esEstreno)';

        $sql = $conn->prepare($query);

        $sql->bindParam(':nombre_pelicula', $this->nombre_pelicula);
        $sql->bindParam(':duracion', $this->duracion);
        $sql->bindParam(':fecha_estreno', $this->fecha_estreno);
        $sql->bindParam(':fecha_baja', $this->fecha_baja);
        $sql->bindParam(':nombre_imagen', $this->nombre_imagen);
        $sql->bindParam(':sinopsis', $this->sinopsis);
        $sql->bindParam(':genero', $this->genero);
        $sql->bindParam(':formatos', $this->formatos);
        $sql->bindParam(':idiomas', $this->idiomas);
        $sql->bindParam(':esEstreno', $this->esEstreno);
        $resultado = $sql->execute();

        $conn = null;
        return $resultado;
    }

    public function eliminarPelicula($id_pelicula)
    {
        require("conexion.php");
        $sql = "DELETE FROM pelicula WHERE id_pelicula = :id_pelicula";
        $query = $conn->prepare($sql);
        $query->bindParam(":id_pelicula", $id_pelicula);
        $query->execute();
    }

    public function seleccionarTodasLasPeliculas()
    {
        require_once("conexion.php");
        /** @var \PDO $conn */
        $query_peliculas = $conn->query("SELECT id_pelicula,nombre_pelicula,fecha_estreno,fecha_baja FROM pelicula");
        $conn = null;
        return $query_peliculas->fetchAll(PDO::FETCH_ASSOC);
    }

    public function seleccionarPelicula($id_pelicula)
    {
        require_once("conexion.php");
        $queryPelicula = $conn->prepare("SELECT * FROM pelicula WHERE id_pelicula = :id_pelicula");
        $queryPelicula->bindParam(':id_pelicula', $id_pelicula);
        $queryPelicula->execute();
        return $queryPelicula->fetch(PDO::FETCH_ASSOC);
    }


    //Setters
    public function setNombrePelicula(string $nombre_pelicula)
    {
        $this->nombre_pelicula = $nombre_pelicula;
    }

    public function setDuracion(string $duracion)
    {
        $this->duracion = $duracion;
    }

    public function setFechaEstreno(string $fecha_estreno)
    {
        $this->fecha_estreno = $fecha_estreno;
    }

    public function setFechaBaja(string $fecha_baja)
    {
        $this->fecha_baja = $fecha_baja;
    }

    public function setNombreImagen(string $nombre_imagen)
    {
        $this->nombre_imagen = 'imagenes/'.$nombre_imagen;
    }

    public function setSinopsis(string $sinopsis)
    {
        $this->sinopsis = $sinopsis;
    }

    public function setGenero(string $genero)
    {
        $this->genero = $genero;
    }
    public function setFormatos(string $formatos)
    {
        $this->formatos = $formatos;
    }
    public function setIdiomas(string $idiomas)
    {
        $this->idiomas = $idiomas;
    }

    public function setEsEstreno(string $esEstreno)
    {
        $this->esEstreno = $esEstreno;
    }
    //Getters


    public function getNombrePelicula()
    {
        return $this->nombre_pelicula;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function getFechaEstreno()
    {
        return $this->fecha_estreno;
    }

    public function getNombreImagen()
    {
        return $this->nombre_imagen;
    }

    public function getFechaBaja()
    {
        return $this->fecha_baja;
    }

    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    public function getIdiomas()
    {
        return $this->idiomas;
    }
    public function getEsEstreno()
    {
        return $this->esEstreno;
    }

    public function getGenero()
    {
        return $this->genero;
    }
    public function getFormatos()
    {
        return $this->formatos;
    }
}
?>