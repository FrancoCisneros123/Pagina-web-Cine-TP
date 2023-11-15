<?php
use controladores\clienteControlador;

require 'controladores/clienteControlador.php';
$objControlador = new clienteControlador();
$objControlador->nuevoCliente();
?>