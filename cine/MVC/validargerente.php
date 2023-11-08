<?php
use controladores\gerenteControlador;

require 'controladores/gerenteControlador.php';
$objControlador = new gerenteControlador();
$objControlador->nuevoGerente();
?>