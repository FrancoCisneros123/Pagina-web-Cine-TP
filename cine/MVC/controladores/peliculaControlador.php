<?php
namespace controladores;

use Exception;
use pelicula;
class PeliculaControlador
{
    public function nuevaPelicula()
    {
        $arrayErrores = [];
        $resultado = false;

        if(isset($_POST["submit"])) 
        {

            if(empty($_POST['nombre_pelicula']) || strlen($_POST['nombre_pelicula']) > 200)
                $arrayErrores["nombre_pelicula"] = "El nombre de la pelicula no debe estar vacío o tener más de 200 cáracteres.";


            if (empty($_POST["duracion"]) || strlen($_POST["duracion"]) > 100)
                $arrayErrores["duracion"] = "La duracion de la pelicula no debe estar vacío o tener más de 100 cáracteres.";


            if (empty($_POST["fecha_estreno"]))
                $arrayErrores["fecha_estreno"] = "La fecha de estreno no debe estar vacío.";


            if (empty($_POST["fecha_baja"]))
                $arrayErrores["fecha_baja"] = "La fecha de baja no debe estar vacío.";


            if (empty($_POST["nombre_imagen"]) || strlen($_POST["nombre_imagen"]) > 100)
                $arrayErrores["nombre_imagen"] = "El nombre de la imagen no debe estar vacío o tener más de 100 cáracteres.";


            if (empty($_POST["sinopsis"]) || strlen($_POST["sinopsis"]) > 50000)
                $arrayErrores["sinopsis"] = "La sinopsis de la pelicula no debe estar vacía o tener más de 50000 cáracteres.";


            if (empty($_POST["formatos"]) || strlen($_POST["formatos"]) > 500)
                $arrayErrores["formatos"] = "Los formatos de la pelicula no deben estar vacíos o tener más de 500 cáracteres.";


            if (empty($_POST["idiomas"]) || strlen($_POST["idiomas"]) > 500)
                $arrayErrores["idiomas"] = "Los idiomas de la pelicula no debe estar vacíos o tener más de 500 cáracteres.";


            if (empty($_POST["generos"]) || strlen($_POST["generos"]) > 500)
                $arrayErrores["generos"] = "Los géneros de la pelicula no deben estar vacío o tener más de 500 cáracteres.";


            if (empty($_POST["esEstreno"]) || ($_POST["esEstreno"] != 'si' && $_POST["esEstreno"] != 'no'))
                $arrayErrores["esEstreno"] = "La opción ingresa no  es válida.";

            if (empty($arrayErrores)) 
            {
                require_once("modelos/pelicula.php");
                try {
                    $nombre_pelicula = $_POST["nombre_pelicula"];
                    $duracion = $_POST["duracion"];
                    $fecha_estreno = $_POST["fecha_estreno"];
                    $fecha_baja = $_POST["fecha_baja"];
                    $nombre_imagen = 'imagenes/'.$_POST["nombre_imagen"];
                    $sinopsis = $_POST["sinopsis"];
                    $genero = $_POST["generos"];
                    $formatos = $_POST["formatos"];
                    $idiomas = $_POST["idiomas"];
                    $esEstreno = $_POST["esEstreno"];
                    $nueva_pelicula = new pelicula($nombre_pelicula,$duracion,$fecha_estreno,$fecha_baja,$nombre_imagen,$sinopsis,$genero,$formatos,$idiomas,$esEstreno);
                    
                    $resultado = $nueva_pelicula->agregar();
                }
                catch(Exception $e) {
                    echo "Error inesperado al insertar registro" . $e->getMessage();
                    die();
                }
            }



        }
        require("MVC/vistas/agregar_pelicula.php");
    }
}
?>