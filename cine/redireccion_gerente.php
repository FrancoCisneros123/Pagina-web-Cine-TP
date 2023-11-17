<?php

//si no es gerente se redirige
if ($_SESSION["id_tipo_usuario"] != "3") {
    header("location: inicio.php");
}

?>