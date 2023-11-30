<?php

require_once "conexion.php";

$arrayAsientos = json_decode($_GET['arrayAsientos']);

foreach ($arrayAsientos as $asiento)
{
    $sql = "INSERT INTO numero_asiento (numero)
    VALUES (:numero)";

    $query = $conn->prepare($sql);
    $query->bindParam(":numero", $asiento);
    $query->execute();
}

?>