<?php
namespace controladores;
use Exception;
use pelicula;

class PeliculaControlador
{
    public function __construct(){
    }
    public function nuevaPelicula()
    {
        $arrayErrores = [];
        $resultado = false;

        if(isset($_POST["submit"]))
        {
            require ("MVC/modelos/pelicula.php");
            $peliculaObj = new Pelicula();

            $arrayErrores["nombre_pelicula"] = $peliculaObj->validarNombrePelicula($_POST["nombre_pelicula"]);
            $arrayErrores["duracion"] = $peliculaObj->validarDuracion($_POST["duracion"]);
            $arrayErrores["fecha_estreno"] = $peliculaObj->validarFechaEstreno($_POST["fecha_estreno"]);
            $arrayErrores["fecha_baja"] = $peliculaObj->validarFechaBaja($_POST["fecha_baja"]);
            $arrayErrores["nombre_imagen"] = $peliculaObj->validarNombreImagen($_POST["nombre_imagen"]);
            $arrayErrores["sinopsis"] = $peliculaObj->validarSinopsis($_POST["sinopsis"]);
            $arrayErrores["idiomas"] = $peliculaObj->validarIdiomas($_POST["idiomas"]);
            $arrayErrores["formatos"] = $peliculaObj->validarFormatos($_POST["formatos"]);
            $arrayErrores["generos"] = $peliculaObj->validarGeneros($_POST["generos"]);
            $arrayErrores["esEstreno"] = $peliculaObj->validarEstreno($_POST["esEstreno"]);
            $arrayErrores = array_filter($arrayErrores);

            if(empty($arrayErrores))
            {
                $peliculaObj->setNombrePelicula($_POST["nombre_pelicula"]);
                $peliculaObj->setDuracion($_POST["duracion"]);
                $peliculaObj->setFechaEstreno($_POST["fecha_estreno"]);
                $peliculaObj->setFechaBaja($_POST["fecha_baja"]);
                $peliculaObj->setNombreImagen($_POST["nombre_imagen"]);
                $peliculaObj->setSinopsis($_POST["sinopsis"]);
                $peliculaObj->setIdiomas($_POST["idiomas"]);
                $peliculaObj->setFormatos($_POST["formatos"]);
                $peliculaObj->setGenero($_POST["generos"]);
                $peliculaObj->setEsEstreno($_POST["esEstreno"]);

                $resultado = $peliculaObj->agregarPelicula();
        
            }
            $peliculaObj = null;
        }
        require("MVC/vistas/agregar_pelicula.php");
    }

    public function mostrarListaPeliculas()
    {
        require ("MVC/modelos/pelicula.php");
        $peliculaObj = new Pelicula();
        $listaPelicula = $peliculaObj->seleccionarTodasLasPeliculas();
        require("MVC/vistas/lista_pelicula.php");

        $peliculaObj = null;
    }

    public function mostrarEliminarPelicula()
    {
        $peliculaSelecionada = 0;
       
        if(isset($_GET["id_pelicula"]))
        {
            require ("MVC/modelos/pelicula.php");
            $peliculaObj = new Pelicula();
            $peliculaSeleccionada = $peliculaObj->seleccionarPelicula($_GET["id_pelicula"]);
            if(isset($_POST["aceptar"]))
               {
                    $peliculaObj->eliminarPelicula($_GET["id_pelicula"]);
                    header("location: home_gerente.php");
               }
            $peliculaObj = null;
            
            
        }
        require("MVC/vistas/eliminar_pelicula_vista.php");
   
    }

    
}
?>