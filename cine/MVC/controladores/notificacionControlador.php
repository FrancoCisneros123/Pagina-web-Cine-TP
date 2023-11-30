<?php 
namespace controladores;
use Exception;
use notificacion;

    class NotificacionControlador
    {
        public function __construct(){
        }
        public function __destruct(){
        }

        public function mostrarNotificaciones()
        {
            require ("MVC/modelos/notificacion.php");
            $notificacionObj = new Notificacion();
            $lista_notificaciones = $notificacionObj->mostrarNotificaciones();
            require("MVC/vistas/lista_notificaciones.php");
            $notificacionObj = null;
        }

        public function nuevaNotificacion()
        {
            $arrayErrores = [];
            $resultado = false;

            if(isset($_POST["submit"]))
            {
                require ("MVC/modelos/notificacion.php");
                $notificacionObj = new Notificacion();

                $arrayErrores["titulo"] = $notificacionObj->validarNombre($_POST["titulo"]);
                $arrayErrores["descripcion"] = $notificacionObj->validarDescripcion($_POST["descripcion"]);
                $arrayErrores = array_filter($arrayErrores);

                if(empty($arrayErrores))
                {
                    $notificacionObj->setNombre($_POST["titulo"]);
                    $notificacionObj->setDescripcion($_POST["descripcion"]);
        
                    $resultado = $notificacionObj->agregarNotificacion();
                }
                $notificacionObj = null;

            }

            require("MVC/vistas/agregar_notificacion.php");
        }

        public function actualizarNotificacion()
        {
            require ("MVC/modelos/notificacion.php");
            $notificacionObj = new Notificacion();
            $arrayErrores = [];
            $resultado = false;

            if(isset($_POST["submit"]))
            {
                $arrayErrores["titulo"] = $notificacionObj->validarNombre($_POST["titulo"]);
                $arrayErrores["descripcion"] = $notificacionObj->validarDescripcion($_POST["descripcion"]);
                $arrayErrores = array_filter($arrayErrores);

                if(empty($arrayErrores))
                {
                    $notificacionObj->setNombre($_POST["titulo"]);
                    $notificacionObj->setDescripcion($_POST["descripcion"]);
        
                    $resultado = $notificacionObj->actualizarNotificacion($_GET["id_notificacion"]);
                }
            }


            require ("MVC/vistas/actualizar_notificacion_vista.php");
            $notificacionObj = null;
        }

       
    }
?>