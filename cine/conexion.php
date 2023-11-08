<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="cinedb";

try {
	$conn = new PDO("mysql:host=$servername;dbname=".$db.";charset=utf8", $username, $password);
    // set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Exito al conectar con la base de datos"; 
} catch(PDOException $e) { //luego modificar con exeption para capturar cualquier excepcion en general
    echo "Conexion fallida: " . $e->getMessage();
    die(); //similar a un exit
}
?>
