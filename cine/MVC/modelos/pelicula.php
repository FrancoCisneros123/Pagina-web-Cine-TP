<?php 
    class pelicula
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

        public function __construct($nombre_pelicula,$duracion,$fecha_estreno,$fecha_baja,$nombre_imagen,$sinopsis,$genero,$formatos,$idiomas,$esEstreno)
        {
            $this->nombre_pelicula = $nombre_pelicula;
            $this->duracion = $duracion;
            $this->fecha_estreno = $fecha_estreno;
            $this->fecha_baja = $fecha_baja;
            $this->nombre_imagen = $nombre_imagen;
            $this->sinopsis = $sinopsis;
            $this->genero = $genero;
            $this->formatos = $formatos;
            $this->idiomas = $idiomas;
            $this->esEstreno = $esEstreno;
        }
        public function __destruct(){

        }
        


        public function agregar()
        {
            require_once("../conexion.php");
            /** @var \PDO $conn */ //informa que la variable $conn es PDO, por ende la reconoce como tal y favorece el autocompletado evitando errores
            $query = 'INSERT INTO pelicula (nombre_pelicula,duracion,fecha_estreno,fecha_baja,nombre_imagen,sinopsis,genero,formatos,idiomas,esEstreno) VALUES (:nombre_pelicula,:duracion,:fecha_estreno,:fecha_baja,:nombre_imagen,:sinopsis,:genero,:formatos,:idiomas,:esEstreno)';
            
            $sql = $conn->prepare($query);
            
            $sql->bindParam(':nombre_pelicula',$this->nombre_pelicula);
            $sql->bindParam(':duracion',$this->duracion);
            $sql->bindParam(':fecha_estreno',$this->fecha_estreno) ;
            $sql->bindParam(':fecha_baja',$this->fecha_baja);
            $sql->bindParam(':nombre_imagen',$this->nombre_imagen );
            $sql->bindParam(':sinopsis',$this->sinopsis);
            $sql->bindParam(':genero',$this->genero);
            $sql->bindParam(':formatos',$this->formatos);
            $sql->bindParam(':idiomas',$this->idiomas);
            $sql->bindParam(':esEstreno',$this->esEstreno) ;
            $resultado =$sql->execute();

            $conn = null;
            return $resultado;
        }
    }
?>